<?php

namespace App\Http\Controllers\UserManagement;

use App\Enum\AbilityEnum;
use App\Enum\RoleEnum;
use App\Enum\TableEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\CustomerRequest;
use App\Models\UserManagement\Hr;
use App\Models\UserManagement\Role;
use App\Models\UserManagement\User;
use App\Services\PersonService;
use App\Traits\General;
use Carbon\Carbon;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use function __;
use function redirect;
use function view;

class FreelancerController extends Controller
{
    use General;

    public function __construct(
        private PersonService $personService
    )
    {
        $this->makeMultipleDirectories('hr', ['documents', 'images', 'signature']);
       // $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize(AbilityEnum::VIEW, Hr::class);
        $records = User::whereHas('roles', function ($q) {
            $q->where('slug', RoleEnum::FREELANCER);
        })->get();
        $params = [
            'pageTitle' => __('general.freelancers'),
            'records' => $records,
        ];

        return view('dashboard.freelancer-management.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(CustomerRequest $request): Factory|View|Application
    {
        $this->authorize(AbilityEnum::CREATE, Hr::class);
        $type = $request->get('type');
        $lastId = Hr::orderBy('id', 'DESC')->value('id');
        $params = [
            'pageTitle' => __('general.new_freelancer'),
            'lastId' => (is_null($lastId) ? '1' : $lastId),
            'type' => $type
        ];

        return view('dashboard.freelancer-management.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(CustomerRequest $request)
    {
        $this->authorize(AbilityEnum::CREATE, Hr::class);
        $data = $request->all();
        if ($user = $this->personService->store($data)) {
            $role = Role::where('slug', RoleEnum::FREELANCER)->value('id');
            $user->roles()->sync([$role]);
            $hr = $user->hr;
            DB::table(TableEnum::HR_SERVICE)->insert([
                'service_id' => $request->input('parent_service_id'),
                'hr_id' => $hr->id,
                'created_by' => $user->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            $sub_services = $request->input('sub_services');
            if (count($sub_services) > 0) {
                foreach ($sub_services as $serviceId) {
                    DB::table(TableEnum::HR_SERVICE)->insert([
                        'service_id' => $serviceId,
                        'hr_id' => $hr->id,
                        'created_by' => $user->id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                }
            }
            return redirect()->route('dashboard.freelancers.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(CustomerRequest $request, $id)
    {
        $this->authorize(AbilityEnum::DELETE, Hr::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.freelancers.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getFreelancers(): Factory|View|Application
    {
        $freelancers = User::with('hr')->whereHas('roles', function ($q) {
            $q->where('slug', RoleEnum::FREELANCER);
        })->get();
        $params = [
            'pageTitle' => __('general.freelancers'),
            'freelancers' => $freelancers,
        ];
        return view('website.freelancers', $params);
    }
}
