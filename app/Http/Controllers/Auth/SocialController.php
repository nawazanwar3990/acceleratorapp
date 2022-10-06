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
            echo "<pre>";
            print_r($socialUser);
        } catch (Exception $e) {
            return redirect()->route('social-login', array($provider));
        }
    }
}
