<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Users\Permission;
use App\Models\Users\Role;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use function redirect;
use function view;

class RolePermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request): Factory|View|Application
    {
        $role_id = $request->query('role');
        $permissions = Permission::all();
        $records = [];
        foreach ($permissions as $permission) {
            $records[$permission->function_name][] = $permission;
        }
        return view('dashboard.user-management.role-permissions.index', compact('records','role_id'));
    }

    public function store(Request $request): RedirectResponse
    {

        $role = $request->query('role');
        $role = Role::find($role);
        $permissions = $request->input('permissions', array());
        $role->permissions()->detach();
        $role->permissions()->attach($permissions);

        return redirect()->route('dashboard.role-permissions.index', ['role' => $role]);
    }
}
