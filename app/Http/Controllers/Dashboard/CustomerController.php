<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\AbilityEnum;
use App\Enum\RoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Customer;
use App\Models\Role;
use App\Models\User;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class CustomerController extends Controller
{
    use General;

    public function __construct(
        private CustomerSerivice $customerSerivice
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
        $this->authorize(AbilityEnum::VIEW, Customer::class);
        $records = User::whereHas('roles', function ($q) {
            $q->where('slug', '=', RoleEnum::CUSTOMER);
        })->get();
        $params = [
            'pageTitle' => __('general.customers'),
            'records' => $records,
        ];
        return view('dashboard.customers.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(UserRequest $request): Factory|View|Application
    {
        $this->authorize(AbilityEnum::CREATE, Customer::class);
        $type = $request->get('type');
        $lastId = Customer::orderBy('id', 'DESC')->value('id');
        $params = [
            'pageTitle' => __('general.new_customer'),
            'lastId' => (is_null($lastId) ? '1' : $lastId),
            'type' => $type
        ];

        return view('dashboard.customers.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(UserRequest $request)
    {
        $this->authorize(AbilityEnum::CREATE, Customer::class);
        $data = $request->all();
        if ($user = $this->customerSerivice->store($data)) {
            $role = Role::whereSlug(RoleEnum::CUSTOMER)->value('id');
            $user->roles()->sync([$role]);

            if ($request->saveNew) {
                return redirect()->route('dashboard.customers.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.customers.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }

    public function show($id): Factory|View|Application
    {
        $customer = User::with('subscriptions')->whereHas('roles', function ($q) {
            $q->where('slug', RoleEnum::CUSTOMER);
        })->find($id);
        $pageTitle ="All Subscription of ".$customer->getFullName();
        return view('dashboard.customers.show', compact('customer','pageTitle'));
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(UserRequest $request, $id)
    {
        $this->authorize('delete', Hr::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.customers.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
