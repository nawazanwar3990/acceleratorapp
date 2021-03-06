<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\AbilityEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Role;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class RoleController extends Controller
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
        $this->authorize(AbilityEnum::VIEW, Role::class);
        $records = Role::orderBy('id','DESC')->get();
        $params = [
            'pageTitle' => __('general.roles'),
            'records' => $records,
        ];
        return view('dashboard.user-management.roles.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize(AbilityEnum::CREATE, Role::class);
        $params = [
            'pageTitle' => __('general.new_roles'),
        ];
        return view('dashboard.user-management.roles.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(RoleRequest $request)
    {
        $this->authorize(AbilityEnum::CREATE, Role::class);

        if ($request->createData()) {

            if ($request->saveNew) {
                return redirect()->route('dashboard.roles.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.roles.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit(Request $request, Role $role): Factory|View|Application
    {
        $this->authorize(AbilityEnum::UPDATE, Role::class);
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($role->name),
            'model' => $role
        ];
        return view('dashboard.user-management.roles.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(RoleRequest $request, Role $role)
    {
        $this->authorize(AbilityEnum::UPDATE, Role::class);
        if ($request->updateData($role)) {

            if ($request->saveNew) {
                return redirect()->route('dashboard.roles.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('dashboard.roles.index')
                    ->with('success', __('general.record_updated_successfully'));
            }


        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(RoleRequest $request, Role $role)
    {
        $this->authorize(AbilityEnum::DELETE, Role::class);
        if ($request->deleteData($role)) {
            return redirect()->route('dashboard.roles.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
