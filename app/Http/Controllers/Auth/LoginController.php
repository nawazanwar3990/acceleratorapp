<?php

namespace App\Http\Controllers\Auth;

use App\Enum\RoleEnum;
use App\Enum\StepEnum;
use App\Enum\SubscriptionStatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Subscription;
use App\Services\PersonService;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function __construct(
        private PersonService $personService
    )
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(): Factory|View|Application
    {
        return view('auth.login');
    }

    /**
     * @throws ValidationException
     */
    public function apply(LoginRequest $request)
    {
        $email = $request->input('email', null);
        $password = $request->input('password', null);
        $security_question_name = $request->input('security_question_name', null);
        $security_question_value = $request->input('security_question_value', null);

        $user = $this->personService->findByEmailOrToken($email);

        if ($user) {
            if ($user->hasRole(RoleEnum::SUPER_ADMIN)) {
                if (!Auth::attempt([
                    'email' => $email,
                    'password' => $password
                ], $request->boolean('remember')
                )) {
                    RateLimiter::hit($this->throttleKey());
                    return redirect()->back()->withInput()->with('error', __('auth.failed'));
                } else {
                    RateLimiter::clear($this->throttleKey());
                    return redirect()->route('dashboard.index')->with('success', trans('general.welcome_back'));
                }
            }
            if (!Hash::check($password, $user->password)) {
                return redirect()->back()->withInput()->with('error', __('general.enter_valid_password'));
            } else if ($user->security_question_name !== $security_question_name) {
                return redirect()->back()->withInput()->with('error', __('general.please_enter_your_valid_security_question'));
            } else if ($user->security_question_value !== $security_question_value) {
                return redirect()->back()->withInput()->with('error', __('general.please_enter_your_valid_answer'));
            } else {
                if ($user->email_verified_at == null) {
                    throw ValidationException::withMessages([
                        'login' => __('general.your_account_is_not_activate_message'),
                    ]);
                } else {
                    if ($user->hasRole(RoleEnum::BUSINESS_ACCELERATOR) || $user->hasRole(RoleEnum::MENTOR) || $user->hasRole(RoleEnum::FREELANCER)) {
                        $subscription = Subscription::where('subscribed_id', $user->id);
                        if (!$subscription->exists()) {
                            if ($user->hasRole(RoleEnum::BUSINESS_ACCELERATOR)){
                                return redirect()->route('website.ba.create', [$user->ba->type,$user->ba->payment_process,StepEnum::PACKAGES,$user->ba->id]);
                            }else  if ($user->hasRole(RoleEnum::FREELANCER)){
                                return redirect()->route('website.freelancers.create', [$user->freelancer->type,$user->freelancer->payment_process,StepEnum::PACKAGES,$user->freelancer->id]);
                            }else  if ($user->hasRole(RoleEnum::MENTOR)){
                                return redirect()->route('website.mentors.create', [$user->mentor->payment_process,StepEnum::PACKAGES,$user->mentor->id]);
                            }

                        } else {
                            $subscription_status = $subscription->value('status');
                            if ($subscription_status == SubscriptionStatusEnum::PENDING) {
                                return redirect()->route('website.pending-subscription', ['subscribed_id' => $user->id]);
                            } else {
                                if (!Auth::attempt([
                                    'email' => $email,
                                    'password' => $password
                                ], $request->boolean('remember')
                                )) {
                                    RateLimiter::hit($this->throttleKey());
                                    return redirect()->back()->withInput()->with('error', __('auth.failed'));
                                } else {
                                    RateLimiter::clear($this->throttleKey());
                                    return redirect()->route('dashboard.index')->with('success', trans('general.welcome_back'));
                                }
                            }
                        }
                    }
                }
            }
        } else {
            return redirect()->back()->withInput()->with('error', __('auth.failed'));
        }
    }

    /**
     * @throws ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }
        event(new Lockout($this));
        $seconds = RateLimiter::availableIn($this->throttleKey());
        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    public function throttleKey(): string
    {
        return Str::lower(request()->input('email')) . '|' . request()->ip();
    }

    public function logout(): Redirector|Application|RedirectResponse
    {
        Auth::logout();
        Cache::flush();
        return redirect()->route('website.index');
    }
}
