<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\RoleEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Services\PersonService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function __;
use function redirect;
use function view;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if (Auth::user() == null) {
            return redirect('login');
        }
        $params = [
            'pageTitle' => __('general.dashboard'),
        ];
        if (PersonService::hasRole(RoleEnum::BUSINESS_ACCELERATOR)) {
            return view('dashboard.ba-dashboard', $params);
        } else if (PersonService::hasRole(RoleEnum::SUPER_ADMIN)) {
            $subscriptions = Subscription::orderBy('id', 'DESC')
                ->where('created_by', Auth::id())
                ->where('subscription_type', SubscriptionTypeEnum::PACKAGE)
                ->paginate(20);
            $params['subscriptions'] = $subscriptions;
            return view('dashboard.admin-dashboard', $params);
        } else if (PersonService::hasRole(RoleEnum::CUSTOMER)) {
            return view('dashboard.customer-dashboard', $params);
        }
    }
}
