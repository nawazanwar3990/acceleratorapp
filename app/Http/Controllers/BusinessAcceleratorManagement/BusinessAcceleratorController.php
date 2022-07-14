<?php

namespace App\Http\Controllers\BusinessAcceleratorManagement;

use App\Enum\AbilityEnum;
use App\Enum\ModuleEnum;
use App\Enum\RoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\VendorRequest;
use App\Models\UserManagement\Hr;
use App\Models\UserManagement\Role;
use App\Models\UserManagement\User;
use App\Services\PersonService;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class BusinessAcceleratorController extends Controller
{
    use General;

    public function __construct(
        private PersonService $personService
    )
    {
        $this->makeMultipleDirectories('hr', ['documents', 'images', 'signature']);
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize(AbilityEnum::VIEW, Hr::class);
        $records = User::whereHas('roles', function ($q) {
            $q->where('slug', RoleEnum::BUSINESS_ACCELERATOR);
        })->get();
        $params = [
            'pageTitle' => __('general.accelerators'),
            'records' => $records,
        ];

        return view('dashboard.business-accelerators.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(VendorRequest $request): Factory|View|Application
    {
        $this->authorize(AbilityEnum::CREATE, Hr::class);
        $type = $request->get('type');
        $lastId = Hr::orderBy('id', 'DESC')->value('id');
        $params = [
            'pageTitle' => __('general.new_accelerator'),
            'lastId' => (is_null($lastId) ? '1' : $lastId),
            'type' => $type
        ];

        return view('dashboard.business-accelerators.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(VendorRequest $request)
    {
        $this->authorize(AbilityEnum::CREATE, Hr::class);
        $data = $request->all();
        if ($user = $this->personService->store($data)) {
            $role = Role::where('slug', RoleEnum::BUSINESS_ACCELERATOR)->value('id');
            $user->roles()->sync([$role]);
            return redirect()->route('dashboard.business-accelerators.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(VendorRequest $request, $id)
    {
        $this->authorize(AbilityEnum::DELETE, Hr::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.business-accelerators.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
