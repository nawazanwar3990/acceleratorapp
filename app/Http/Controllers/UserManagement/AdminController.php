<?php

namespace App\Http\Controllers\UserManagement;

use App\Enum\ModuleEnum;
use App\Enum\RoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\VendorRequest;
use App\Models\UserManagement\Hr;
use App\Models\UserManagement\Role;
use App\Services\PersonService;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class AdminController extends Controller
{
    use General;

    public function __construct(
        private PersonService $personService
    )
    {
        $this->makeDirectory('HR');
        $this->makeMultipleDirectories('HR', ['documents', 'images', 'signature']);
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', Hr::class);
        $records = Hr::orderBy('first_name', 'ASC')
            ->get();
        $params = [
            'pageTitle' => __('general.admins'),
            'records' => $records,
        ];

        return view('dashboard.admin-management.admins.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(VendorRequest $request): Factory|View|Application
    {
        $this->authorize('create', Hr::class);
        $type = $request->get('type');
        $lastId = Hr::orderBy('id', 'DESC')->value('id');
        $params = [
            'pageTitle' => __('general.new_admin'),
            'lastId' => (is_null($lastId) ? '1' : $lastId),
            'type' => $type
        ];

        return view('dashboard.admin-management.admins.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(VendorRequest $request)
    {
        $this->authorize('create', Hr::class);
        $data = $request->all();
        if ($user = $this->personService->store($data)) {
            $role = Role::where('slug', RoleEnum::ADMIN)->value('id');
            $user->roles()->sync([$role]);
            ModuleEnum::add_permission_to_admin();
            return redirect()->route('dashboard.admins.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(VendorRequest $request, $id)
    {
        $this->authorize('delete', Hr::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.admins.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
