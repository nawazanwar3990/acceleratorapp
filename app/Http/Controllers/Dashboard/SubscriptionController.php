<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\DurationEnum;
use App\Enum\KeyWordEnum;
use App\Enum\PaymentForEnum;
use App\Enum\RoleEnum;
use App\Enum\SubscriptionStatusEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Enum\TableEnum;
use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Package;
use App\Models\PaymentReceipt;
use App\Models\Plan;
use App\Models\Subscription;
use App\Notifications\ApprovedSubscription;
use App\Notifications\DeclinedSubscription;
use App\Notifications\RenewSubscription;
use App\Services\GeneralService;
use App\Services\PersonService;
use App\Services\SubscriptionService;
use Carbon\Carbon;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use function __;
use function auth;
use function response;
use function route;
use function view;

class SubscriptionController extends Controller
{
    public function __construct(
        private SubscriptionService $subscriptionService
    )
    {
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View|void
     */
    public function index(Request $request)
    {
        $type = $request->query('type');
        $subscriptions = $this->subscriptionService->getListByPagination($type);
        if ($type == SubscriptionTypeEnum::PLAN) {
            $pageTitle = trans('general.plan_subscriptions');
            return view('dashboard.subscriptions.list.plans', compact(
                'subscriptions',
                'pageTitle',
                'type'
            ));
        } else if ($type == SubscriptionTypeEnum::PACKAGE) {
            $pageTitle = __('general.package_subscriptions');
            return view('dashboard.subscriptions.list.packages', compact(
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
            return view('dashboard.subscriptions.create.plans', compact(
                'records',
                'type',
                'pageTitle',
                'id'
            ));
        } else {
            $records = Package::where('created_by', Auth::id())->get();
            $pageTitle = 'Packages Subscriptions';
            return view('dashboard.subscriptions.create.packages', compact(
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

    public function update(Request $request, $id, $status): JsonResponse
    {
        $type = $request->input('type');
        $subscription_for = $request->input('subscription_for');

        $subscription = Subscription::find($id);
        $subscription->status = $status;
        $subscription->reason = $request->input('reason');
        $subscription->save();
        $route = '';
        if ($status == SubscriptionStatusEnum::RENEW) {
            $model = Package::find($subscription->subscription_id);
            $limit = $model->duration_limit;
            $duration_type = $model->duration_type->slug;
            $subscription->renewal_date = Carbon::now();
            $from_date = Carbon::now();
            $subscription->expire_date = GeneralService::get_remaining_time($duration_type, $limit, $from_date);
            $subscription->save();
        }
        if ($subscription->subscription_type == SubscriptionTypeEnum::PACKAGE) {
            $route = route('dashboard.subscriptions.index', ['type' => SubscriptionTypeEnum::PACKAGE, 'subscription_for' => $subscription_for]);
            $package = Package::find($subscription->subscription_id);
            $limit = $package->duration_limit;
            $from_date = Carbon::now();
            $duration_type = $package->duration_type->slug;
            $subscription->renewal_date = Carbon::now();
            $subscription->expire_date = GeneralService::get_remaining_time($duration_type, $limit, $from_date);
            $subscription->save();
        }
        if ($subscription->subscription_type == SubscriptionTypeEnum::PLAN) {
            $route = route('dashboard.subscriptions.index', ['type' => SubscriptionTypeEnum::PLAN, 'subscription_for' => 'office']);
            $plan = Plan::find($subscription->subscription_id);
            $from_date = Carbon::now();
            $limit = $plan->duration;
            $subscription->renewal_date = Carbon::now();
            $subscription->expire_date = GeneralService::get_remaining_time(DurationEnum::MONTHLY, $limit, $from_date);
            $subscription->save();
        }
        PaymentReceipt::where('subscribed_id', $subscription->subscribed_id)
            ->where('subscription_id', $subscription->id)
            ->where('is_processed', false)
            ->update([
                'is_processed' => true
            ]);
        if ($subscription->status == SubscriptionStatusEnum::APPROVED) {
            session()->put('info', trans('general.approved_subscription_mail_message'));
            Notification::send($subscription->subscribed, new ApprovedSubscription());
        }
        if ($subscription->status == SubscriptionStatusEnum::DECLINED) {
            session()->put('info', trans('general.declined_subscription_mail_message'));
            Notification::send($subscription->subscribed, new DeclinedSubscription());
        }
        if ($subscription->status == SubscriptionStatusEnum::RENEW) {
            session()->put('info', trans('general.renew_subscription_mail_message'));
            Notification::send($subscription->subscribed, new RenewSubscription());
        }
        return response()->json([
            'status' => true,
            'route' => $route
        ]);
    }

}
