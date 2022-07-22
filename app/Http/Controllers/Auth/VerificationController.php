<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Services\PersonService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class VerificationController extends Controller
{
    use VerifiesEmails;

    protected string $redirectTo = RouteServiceProvider::HOME;

    public function __construct(
        private PersonService $personService
    )
    {
        /*  $this->middleware('auth');
          $this->middleware('signed')->only('verify');
          $this->middleware('throttle:6,1')->only('verify', 'resend');*/
    }

    public function verify(Request $request): RedirectResponse
    {
        $userID = $request['id'];
        $user = User::findOrFail($userID);
        $date = date("Y-m-d g:i:s");
        $user->email_verified_at = $date;
        $user->save();
        return redirect()->route('login')->with('success', 'Your account has activated please login and processed');
    }

    public function resend(Request $request): Factory|View|Application
    {
        return view('auth.verification.resend');
    }

    /**
     * @throws ValidationException
     */
    public function postResend(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        $user = $this->personService->findByEmail($email);
        if ($user) {
            if (!Hash::check($password, $user->password)) {
                throw ValidationException::withMessages([
                    'password' => __('auth.password'),
                ]);
            } else {
                event(new Registered($user));
                return redirect()->back()->with('success', trans('general.resend_email_address_message'));
            }
        } else {
            throw ValidationException::withMessages([
                'login' => __('auth.failed'),
            ]);
        }
    }

}
