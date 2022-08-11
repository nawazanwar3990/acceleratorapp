<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\AbilityEnum;
use App\Enum\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function view;

class CustomerController extends Controller
{
    use General;

    public function __construct(
    )
    {
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
    public function show($id): Factory|View|Application
    {
        $customer = User::with('subscriptions')->whereHas('roles', function ($q) {
            $q->where('slug', RoleEnum::CUSTOMER);
        })->find($id);
        $pageTitle ="All Subscription of ".$customer->getFullName();
        return view('dashboard.customers.show', compact('customer','pageTitle'));
    }
}
