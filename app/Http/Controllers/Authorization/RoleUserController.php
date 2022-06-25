<?php

namespace App\Http\Controllers\Authorization;

use App\Http\Controllers\Controller;
use App\Models\UserManagement\Role;
use App\Models\UserManagement\User;
use App\Services\BuildingService;
use App\Services\SchoolService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request): Factory|View|Application
    {
        $role_id = $request->query('role');
        $users = User::with(['building', 'created_by', 'updated_by'])
            ->where('building_id', BuildingService::getBuildingId())
            ->paginate(20);
        return view('dashboard.authorization.role-users.index',
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
