<?php

namespace App\Http\Controllers\Auth;

use App\Enum\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\BA;
use App\Models\Customer;
use App\Models\Freelancer;
use App\Models\Mentor;
use App\Models\Role;
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
            if (!isset($_COOKIE['is_register'])) {
                $user = $this->personService->findByEmail($email);
                if ($user->provider !== '') {
                    Auth::login($user);
                    return redirect()
                        ->route('website.index')
                        ->with('success', 'Successfully Login From ' . strtoupper($provider));
                } else {
                    return redirect()->back()->with('error', 'This is not a valid User Please check Your Account and try again');
                }
            } else {
                $is_register = $_COOKIE['is_register'];
                if ($is_register == 'yes') {
                    $user = $this->personService->findByEmail($email);
                    if ($user) {
                        return redirect()->route('website.index', ['social_register_error' => 'yes'])->with('error', 'User With this Email is already Exists');
                    } else {
                        $register_detail = json_decode($_COOKIE['register_detail'], true);
                        $model = null;
                        if ($register_detail['parent'] == 'ba') {
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
                        $name = explode(' ', $socialUser->name);
                        $user->first_name = $name[0] ?? null;
                        $user->last_name = $name[1] ?? null;
                        $user->email = $email;
                        $user->email_verified_at = Carbon::now();
                        $user->normal_password = 'user1234';
                        $user->password = Hash::make('user1234');
                        $user->provider = $provider;
                        $user->provider_id = $socialUser->id;
                        $user->save();
                        $model->user_id = $user->id;
                        $model->save();
                        if ($register_detail['parent'] == 'ba') {
                            $user->roles()->sync(Role::where('slug', RoleEnum::BUSINESS_ACCELERATOR)->value('id'));
                        }
                        if ($register_detail['parent'] == 'freelancers') {
                            $user->roles()->sync(Role::where('slug', RoleEnum::FREELANCER)->value('id'));
                        }
                        if ($register_detail['parent'] == 'customer') {
                            $user->roles()->sync(Role::where('slug', RoleEnum::CUSTOMER)->value('id'));
                        }
                        if ($register_detail['parent'] == 'mentors') {
                            $user->roles()->sync(Role::where('slug', RoleEnum::MENTOR)->value('id'));
                        }
                        Auth::login($user);
                        GeneralService::setCookie("register_detail", "");
                        GeneralService::setCookie("register_route", "");
                        GeneralService::setCookie("is_register", "");

                        return redirect()
                            ->route('website.index')
                            ->with('success', 'Successfully Register From ' . strtoupper($provider));
                    }
                } else {
                    $user = $this->personService->findByEmail($email);
                    if ($user->provide_id == $socialUser->id) {
                        Auth::login($user);
                        return redirect()
                            ->route('website.index')
                            ->with('success', 'Successfully Login From ' . strtoupper($provider));
                    } else {
                        return redirect()->back()->with('error', 'This is not a valid User Please check Your Account and try again');
                    }
                }
            }
        } catch (Exception $e) {
            return redirect()->route('social-login', array($provider));
        }
    }
}
