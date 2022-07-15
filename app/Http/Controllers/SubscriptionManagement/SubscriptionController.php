<?php

namespace App\Http\Controllers\SubscriptionManagement;

use App\Enum\DurationEnum;
use App\Enum\RoleEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Enum\TableEnum;
use App\Http\Controllers\Controller;
use App\Models\PlanManagement\Plan;
use App\Models\SubscriptionManagement\Package;
use App\Models\SubscriptionManagement\Subscription;
use App\Models\PaymentManagement\Payment;
use App\Models\UserManagement\User;
use App\Models\WorkingSpace\Office;
use App\Services\GeneralService;
use Carbon\Carbon;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function __;
use function redirect;
use function view;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(Request $request): Factory|View|Application
    {
        $this->authorize('view', Subscription::class);
        $records = Subscription::where('created_by', Auth::id());
        $type = $request->query('type');
        if ($type) {
            $records = $records->where('subscription_type', $type);
        }
        $records = $records->paginate(20);
        $params = [
            'pageTitle' => __('general.subscriptions'),
            'records' => $records
        ];
        return view('dashboard.subscription-management.subscriptions.index', $params);
    }

    public function create(Request $request): Factory|View|Application
    {
        $type = $request->get('type');
        $id = $request->get('id');
        if ($type == SubscriptionTypeEnum::PLAN) {
            $records = Office::with(['plans'=>function($q){
                $q->with('basic_services','additional_services');
            }])->where('created_by', Auth::id())->get();
            $pageTitle = 'Apply Subscription For Office';
            return view('dashboard.subscription-management.subscriptions.offices', compact(
                'records',
                'type',
                'pageTitle',
                'id'
            ));
        } else {
            $records = Package::where('created_by', Auth::id())->get();
            $pageTitle = 'Apply Subscription For Packages';
            return view('dashboard.subscription-management.subscriptions.packages', compact(
                'records',
                'type',
                'pageTitle',
                'id'
            ));
        }
    }

    public function store(Request $request): JsonResponse
    {
        $subscription_id = $request->subscription_id;
        $subscribed_id = $request->subscribed_id;
        $payment_type = $request->payment_type;
        $subscription_type = $request->subscription_type;

        $transaction_id = $request->transaction_id;

        $subscription = new Subscription();
        $subscription->subscribed_id = $subscribed_id;
        $subscription->subscription_id = $subscription_id;
        $subscription->subscription_type = $subscription_type;
        $price = 0;
        if ($subscription_type == SubscriptionTypeEnum::PACKAGE) {
            $package = Package::find($subscription_id);
            $limit = $package->duration_limit;
            $from_date = Carbon::now();
            $duration_type = $package->duration_type->slug;
            $price = $package->price;
            $subscription->price = $price;
            $subscription->is_payed = true;
            $subscription->created_by = auth()->id();
            $subscription->renewal_date = Carbon::now();
            $subscription->expire_date = GeneralService::get_remaining_time($duration_type, $limit, $from_date);
        }
        if ($subscription_type == SubscriptionTypeEnum::PLAN) {
            $plan = Plan::find($subscription_id);
            $from_date = Carbon::now();
            $price = $plan->price;
            $limit = $plan->duration;
            $subscription->price = $price;
            $subscription->is_payed = true;
            $subscription->created_by = auth()->id();
            $subscription->renewal_date = Carbon::now();
            $subscription->expire_date = GeneralService::get_remaining_time(DurationEnum::MONTHLY, $limit, $from_date);
        }
        if ($subscription->save()) {
            DB::table(TableEnum::SUBSCRIPTION_LOGS)->insert([
                'subscribed_id' => $subscribed_id,
                'subscription_id' => $subscription->id,
                'price' => $price,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            Payment::create([
                'subscribed_id' => $subscribed_id,
                'subscription_id' => $subscription->id,
                'payment_type' => $payment_type,
                'transaction_id' => $transaction_id
            ]);
        }
        return response()->json([
            'status' => true,
            'route' => route('dashboard.subscriptions.index', ['id' => request()->query('id'), 'type' => $subscription_type])
        ]);
    }
}
