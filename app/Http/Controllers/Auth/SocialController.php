<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\BA;
use App\Models\Customer;
use App\Models\Freelancer;
use App\Models\Mentor;
use App\Models\User;
use App\Services\GeneralService;
use App\Services\PersonService;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
                    return redirect()->route('website.index', ['social_register_error' => 'yes'])->with('error', 'User With this Email is already Exists');
                } else {
                    $register_detail = json_decode($_COOKIE['register_detail'], true);
                    $model = null;
                    if ($register_detail['parent'] == 'business_accelerator') {
                        $model = new BA();
                        $model->type = $register_detail['type'];
                    }
                    if ($register_detail['parent'] == 'freelancers') {
                        $model = new Freelancer();
                        $model->type = $register_detail['type'];
                    }
                    if ($register_detail['parent'] == 'customer') {
                        $model = new Customer();
                    }
                    if ($register_detail['parent'] == 'mentors') {
                        $model = new Mentor();
                    }
                    if (isset($register_detail['payment_type'])) {
                        $model->payment_process = $register_detail['payment_type'];
                    }
                    $model->save();
                    $user = new User();
                    if ($provider == 'google') {
                        $user->first_name = $socialUser['user']['given_name'] ?? null;
                        $user->last_name = $socialUser['user']['family_name'] ?? null;
                        $user->email = $email;
                        $user->email_verified_at = Carbon::now();
                        $user->normal_password = 'user1234';
                        $user->password = Hash::make('user1234');
                        $user->provider = $provider;
                        $user->provider_id = $socialUser->id;
                        $user->save();
                        Auth::login($user);
                    }
                    return redirect()
                        ->route('website.index')
                        ->with('success', 'Successfully Register Account From ' . strtoupper($provider));
                }
            } else {
                // Ready for Login
            }
        } catch (Exception $e) {
            return redirect()->route('social-login', array($provider));
        }
    }
}
