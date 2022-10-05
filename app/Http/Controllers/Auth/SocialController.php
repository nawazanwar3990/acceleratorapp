<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\GeneralService;
use App\Services\PersonService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function __construct(
        private PersonService $personService
    )
    {

    }

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
            $email = $socialUser->email;
            $is_register = $_COOKIE['is_register'];
            if ($is_register == 'yes') {
                // Ready for Registration
                $user = $this->personService->findByEmail($email);
                if ($user) {
                    return redirect()->route('website.index', ['is_error' => true])->with('error', 'User With this Email is already Exists');
                } else {
                    session()->put('social_user', $socialUser);
                    $route = $_COOKIE['register_route'];
                    return redirect()->to($route)->with('success', 'Successfully Register From Social Account Please Fill Other Information');
                }
            } else {
                // Ready for Login
            }
        } catch (Exception $e) {
            return redirect()->route('social-login', array($provider));
        }
    }
}
