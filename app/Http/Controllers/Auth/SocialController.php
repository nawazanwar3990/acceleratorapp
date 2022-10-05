<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\GeneralService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
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

    public function callBack($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->stateless()->user();
            $provider_id = $socialUser->id;
            $email = $socialUser->email;
            $is_register = $_COOKIE['is_register'];
            if ($is_register == 'yes') {
                // apply register
                $alreadyUser = User::where('email', $email)->exists();
                if ($alreadyUser) {
                    GeneralService::setCookie('is_register_error', 'yes');
                    return redirect()->route('website.index')->with('error', 'User With the Email Already Exists');
                } else {
                    echo "<pre>";
                    print_r($socialUser);
                }
            } else {
                //apply login
            }
        } catch (Exception $e) {
            return redirect()->route('social-login', array($provider));
        }
    }
}
