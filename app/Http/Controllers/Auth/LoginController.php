<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\PersonService;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
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
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $this->ensureIsNotRateLimited();
        $email = $request->input('email');
        $password = $request->input('password');
        $user = $this->personService->findByEmail($email);
        if ($user) {
            if ($user->email_verified_at == null) {
                throw ValidationException::withMessages([
                    'login' => __('general.your_account_is_not_activate_message'),
                ]);
            } else {
                if (!Auth::attempt([
                    'email' => $email,
                    'password' => $password
                ], $request->boolean('remember')
                )) {
                    RateLimiter::hit($this->throttleKey());
                    throw ValidationException::withMessages([
                        'login' => __('auth.failed'),
                    ]);

                } else {
                    RateLimiter::clear($this->throttleKey());
                    return redirect()->route('dashboard.index')->with('success', trans('general.welcome_back'));
                }
            }
        } else {
            throw ValidationException::withMessages([
                'login' => __('auth.failed'),
            ]);
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
        return redirect('/login');
    }
}
