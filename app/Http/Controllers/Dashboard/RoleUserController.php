<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use function redirect;
use function view;

class RoleUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request): Factory|View|Application
    {
        $role_id = $request->query('role');
        $users = User::with(['created_by', 'updated_by'])
            ->paginate(20);
        return view('dashboard.user-management.role-users.index',
            compact(
                'users',
                'role_id'
            ));
    }

    public function store(Request $request): RedirectResponse
    {

        $role = $request->query('role');
        $role = Role::find($role);
        $users = $request->input('users', array());
        $role->users()->detach();
        $role->users()->attach($users);
        return redirect()->route('dashboard.roles.index', ['role' => $role]);
    }
}
