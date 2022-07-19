<?php

namespace App\Http\Controllers\Subscriptions;

use App\Enum\DurationEnum;
use App\Enum\KeyWordEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Enum\TableEnum;
use App\Http\Controllers\Controller;
use App\Models\Plans\Plan;
use App\Models\Subscriptions\Package;
use App\Models\Subscriptions\Payment;
use App\Models\Subscriptions\Subscription;
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
use function view;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View|void
     * @throws AuthorizationException
     */
    public function index(Request $request)
    {
        $this->authorize('view', Subscription::class);
        $subscriptions = Subscription::where('created_by', Auth::id());
        $type = $request->query('type');
        if ($type) {
            $subscriptions = $subscriptions->where('subscription_type', $type);
        }
        $subscriptions = $subscriptions->paginate(20);
        if ($type == SubscriptionTypeEnum::PLAN) {
            $pageTitle = __('general.plan_subscriptions');
            return view('dashboard.subscription-management.subscriptions.list.plans', compact(
                'subscriptions',
                'pageTitle',
                'type'
            ));
        } else if ($type == SubscriptionTypeEnum::PACKAGE) {
            $pageTitle = __('general.package_subscriptions');
            return view('dashboard.subscription-management.subscriptions.list.packages', compact(
                'subscriptions',
                'pageTitle',
                'type'
            ));
        }
    }

    public function create(Request $request): Factory|View|Application
    {
        $type = $request->get('type');
        $id = $request->get('id');
        if ($type == SubscriptionTypeEnum::PLAN) {
            $records = Office::with(['plans' => function ($q) {
                $q->with('basic_services', 'additional_services');
            }])->where('created_by', Auth::id())->get();
            $pageTitle = 'Offices Subscription';
            return view('dashboard.subscription-management.subscriptions.create.plans', compact(
                'records',
                'type',
                'pageTitle',
                'id'
            ));
        } else {
            $records = Package::where('created_by', Auth::id())->get();
            $pageTitle = 'Packages Subscriptions';
            return view('dashboard.subscription-management.subscriptions.create.packages', compact(
                'records',
                'type',
                'pageTitle',
                'id'
            ));
        }
    }

    public function store(Request $request): JsonResponse
    {

        $request_price = $request->input('price', 0);

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
            $price = $request_price;
            $plan = Plan::find($subscription_id);
            $from_date = Carbon::now();
            $limit = $plan->duration;
            $subscription->price = $price;
            $subscription->model_id = $request->input('model_id');
            $subscription->model_type = KeyWordEnum::FLOOR;
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
                'transaction_id' => $transaction_id,
                'price' => $price
            ]);
        }
        return response()->json([
            'status' => true,
            'route' => route('dashboard.subscriptions.index', ['id' => request()->query('id'), 'type' => $subscription_type])
        ]);
    }

    public function logs(Request $request)
    {
        echo "under process";
    }
}
