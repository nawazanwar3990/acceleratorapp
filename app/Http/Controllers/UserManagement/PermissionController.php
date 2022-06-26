<?php

namespace App\Http\Controllers\UserManagement;

use App\Enum\AbilityEnum;
use App\Enum\ModuleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\PermissionRequest;
use App\Models\UserManagement\Permission;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize(AbilityEnum::VIEW, Permission::class);
        $permissions = Permission::orderBy('id', 'DESC')->get();
        $records = [];
        foreach ($permissions as $permission) {
            $records[$permission->function_name][] = $permission;
        }

        $params = [
            'pageTitle' => __('general.permissions'),
            'records' => $records,
        ];
        return view('dashboard.user-management.permissions.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize(AbilityEnum::CREATE, Permission::class);
        $params = [
            'pageTitle' => __('general.new_permissions'),
        ];
        return view('dashboard.user-management.permissions.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(PermissionRequest $request)
    {
        $this->authorize(AbilityEnum::CREATE, Permission::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.permissions.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit(Request $request, Permission $permission): Factory|View|Application
    {
        $this->authorize(AbilityEnum::UPDATE, Permission::class);
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($permission->name),
            'model' => $permission
        ];
        return view('dashboard.user-management.permissions.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(PermissionRequest $request, Permission $permission)
    {
        $this->authorize(AbilityEnum::UPDATE, Permission::class);
        if ($request->updateData($permission)) {
            return redirect()->route('dashboard.permissions.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(PermissionRequest $request, Permission $permission)
    {
        $this->authorize(AbilityEnum::DELETE, Permission::class);
        if ($request->deleteData($permission)) {
            return redirect()->route('dashboard.permissions.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function syncPermission(): RedirectResponse
    {
        ModuleEnum::sync_module_permissions();
        return redirect()->route('dashboard.permissions.index')
            ->with('success', __('general.permission_synced_successfully'));
    }
}
