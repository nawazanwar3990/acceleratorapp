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
            $is_register_object = $_COOKIE['is_register_object'];
            if ($is_register_object) {
                // apply register
                $register_object = json_decode($is_register_object, true);
                echo "<pre>";
                print_r($register_object);
            } else {
                //apply login
            }
        } catch (Exception $e) {
            return redirect()->route('social-login', array($provider));
        }
    }
}
