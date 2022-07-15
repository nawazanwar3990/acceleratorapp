<?php

namespace App\Http\Controllers\Auth;

use App\Enum\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Users\Role;
use App\Providers\RouteServiceProvider;
use App\Services\PersonService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
}
