<?php

namespace App\Http\Controllers;

use App\Enum\AbilityEnum;
use App\Enum\RoleEnum;
use App\Http\Requests\UserManagement\UserRequest;
use App\Models\Hr;
use App\Models\Investor;
use App\Models\Role;
use App\Models\User;
use App\Services\PersonService;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class InvestorController extends Controller
{
    use General;

    public function __construct(
        private PersonService $personService
    )
    {
        $this->makeMultipleDirectories('hr', ['documents', 'images', 'signature']);
      //  $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize(AbilityEnum::VIEW, Investor::class);
        $records = User::whereHas('roles', function ($q) {
            $q->where('slug', RoleEnum::INVESTOR);
        })->get();
        $params = [
            'pageTitle' => __('general.investors'),
            'records' => $records,
        ];

        return view('dashboard.user-management.investors.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(UserRequest $request): Factory|View|Application
    {
        $this->authorize(AbilityEnum::CREATE, Investor::class);
        $type = $request->get('type');
        $lastId = Hr::orderBy('id', 'DESC')->value('id');
        $params = [
            'pageTitle' => __('general.new_investor'),
            'lastId' => (is_null($lastId) ? '1' : $lastId),
            'type' => $type
        ];

        return view('dashboard.user-management.investors.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(UserRequest $request)
    {
        $this->authorize(AbilityEnum::CREATE, Investor::class);
        $data = $request->all();
        if ($user = $this->personService->store($data)) {
            $role = Role::where('slug', RoleEnum::INVESTOR)->value('id');
            $user->roles()->sync([$role]);
            return redirect()->route('dashboard.investors.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(UserRequest $request, $id)
    {
        $this->authorize(AbilityEnum::DELETE, Investor::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.investors.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
    public function getInvestors(): Factory|View|Application
    {
        $investors = User::with('hr')->whereHas('roles', function ($q) {
            $q->where('slug', RoleEnum::INVESTOR);
        })->get();
        $params = [
            'pageTitle' => __('general.investors'),
            'investors' => $investors,
        ];
        return view('website.investors', $params);
    }
}
