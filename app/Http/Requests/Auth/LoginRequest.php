<?php

namespace App\Http\Requests\Auth;

use App\Models\RealEstate\Settings\SystemSetting;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        $email = $this->login;
        $username = $this->login;
        $password = $this->password;
        if (! Auth::attempt(['email' => $email, 'password' => $password], $this->boolean('remember'))) {
            if (! Auth::attempt(['user_name' => $username, 'password' => $password], $this->boolean('remember'))) {
                RateLimiter::hit($this->throttleKey());

                throw ValidationException::withMessages([
                    'login' => __('auth.failed'),
                ]);
            }
        }

        $this->savePrintTheme();
        RateLimiter::clear($this->throttleKey());
    }

    public function savePrintTheme()
    {
        $model = SystemSetting::select('print_template')->first();
        $printHeader = null;
        $printFooter = null;
        if ($model->print_template == 'template-1') {
            $printHeader = "layouts.print-templates.template-1.header";
            $printFooter = "layouts.print-templates.template-1.footer";
        } elseif ($model->print_template == 'template-2') {
            $printHeader = "layouts.print-templates.template-2.header";
            $printFooter = "layouts.print-templates.template-2.footer";
        }

        Session::put([
            'printHeader' => $printHeader,
            'printFooter' => $printFooter,
        ]);
        return true;
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
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

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::lower($this->input('email')).'|'.$this->ip();
    }
}
