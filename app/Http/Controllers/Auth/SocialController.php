<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    /**
     * Redirect to Social Login.
     * @param $provider
     * @return mixed
     */
    public function redirect($provider)
    {
        if ($provider == 'linkedin') {
            return Socialite::driver($provider)
                ->setScopes(array('r_liteprofile', 'r_emailaddress'))
                ->stateless()
                ->redirect();
        } else {
            return Socialite::driver($provider)->stateless()->redirect();
        }
    }

    /**
     * Call Back From Social Login.
     * @param $provider
     * @return RedirectResponse
     */
    public function callBack($provider): RedirectResponse
    {
        try {
            $socialUser = Socialite::driver($provider)->stateless()->user();
        } catch (Exception $e) {
            return redirect()->route('social-login', array($provider));
        }
        if (empty($socialUser->email)) {
            return \redirect()->route('login')->with('social_error', trans('auth.no-id-return') . $provider);
        } else {
            $email = $socialUser->email;
            $alreadyUser = User::where('email', $email)->exists();
            if ($alreadyUser) {
                $user = User::where('email', $email)->first();
                $user->provider = $provider;
                $user->provider_id = $socialUser->id;
                if ($user->save()) {
                    Auth::login($user);
                    return \redirect()->route('home');
                }
            } else {
                return \redirect()->route('register', array(
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'provider' => $provider,
                    'provider_id' => $socialUser->id,
                ));
            }
        }
    }
}
