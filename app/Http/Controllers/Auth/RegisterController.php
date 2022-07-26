<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\VerifyUser;
use App\Providers\RouteServiceProvider;
use App\Services\PersonService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected string $redirectTo = RouteServiceProvider::HOME;

    public function __construct(
        private PersonService $personService
    )
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm($type = null): Factory|View|Application
    {
        if ($type) {
            $role_id = Role::whereSlug($type)->value('id');
            $pageTitle = trans('general.register');
            return view('auth.register.step2', compact('pageTitle', 'role_id'));
        } else {
            $pageTitle = trans('general.select_type');
            return view('auth.register.step1', compact('pageTitle'));
        }
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
        $data = $request->all();
        $user = $this->personService->store($data);
        event(new Registered($user));
        return redirect()->route('login')->with('success', trans('general.verify_email_address_message'));
    }
    public function verifyUser($token): Redirector|Application|RedirectResponse
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $date = date("Y-m-d g:i:s");
                $verifyUser->user->email_verified_at = $date;
                $verifyUser->user->save();
                $status = "Your e-mail is verified. You can now login.";
            } else {
                $status = "Your e-mail is already verified. You can now login.";
            }
        } else {
            return redirect('/login')->with('error', "Sorry your email cannot be identified.");
        }
        return redirect('/login')->with('success', $status);
    }
}
