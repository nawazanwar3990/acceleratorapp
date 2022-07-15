<?php

namespace App\Http\Controllers\User;

use App\Enum\AbilityEnum;
use App\Enum\RoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\CustomerRequest;
use App\Http\Requests\UserManagement\UserRequest;
use App\Models\UserManagement\BA;
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

class BAController extends Controller
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
        $this->authorize(AbilityEnum::VIEW, BA::class);
        $records = User::whereHas('roles', function ($q) {
            $q->where('slug', RoleEnum::BUSINESS_ACCELERATOR);
        })->get();
        $params = [
            'pageTitle' => __('general.accelerators'),
            'records' => $records,
        ];

        return view('dashboard.user-management.ba.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(UserRequest $request): Factory|View|Application
    {
        $this->authorize(AbilityEnum::CREATE, BA::class);
        $type = $request->get('type');
        $lastId = Hr::orderBy('id', 'DESC')->value('id');
        $params = [
            'pageTitle' => __('general.new_accelerator'),
            'lastId' => (is_null($lastId) ? '1' : $lastId),
            'type' => $type
        ];

        return view('dashboard.user-management.ba.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(UserRequest $request)
    {
        $this->authorize(AbilityEnum::CREATE, BA::class);
        $data = $request->all();
        if ($user = $this->personService->store($data)) {
            $role = Role::where('slug', RoleEnum::BUSINESS_ACCELERATOR)->value('id');
            $user->roles()->sync([$role]);
            return redirect()->route('dashboard.ba.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(UserRequest $request, $id)
    {
        $this->authorize(AbilityEnum::DELETE, BA::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.ba.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
