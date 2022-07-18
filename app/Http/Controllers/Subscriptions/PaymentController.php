<?php

namespace App\Http\Controllers\Subscriptions;

use App\Enum\DurationEnum;
use App\Enum\PaymentTypeEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Enum\TableEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageManagement\DurationRequest;
use App\Models\Plans\Plan;
use App\Models\Subscriptions\Duration;
use App\Models\Subscriptions\Package;
use App\Models\Subscriptions\Payment;
use App\Models\Subscriptions\Subscription;
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
use Monolog\Handler\IFTTTHandler;
use function __;
use function redirect;
use function response;
use function view;

class PaymentController extends Controller
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
        $this->authorize('view', Payment::class);
        $id = $request->query('id');
        $records = Payment::with('subscribed', 'subscription')
            ->where('subscription_id',$id)
            ->paginate(20);
        $params = [
            'pageTitle' => __('general.payments'),
            'records' => $records
        ];
        return view('dashboard.payment-management.payments.index', $params);
    }

    public function store(Request $request): JsonResponse
    {
        $payment_type = $request->input('payment_type');
        $subscription_id = $request->input('subscription_id');
        $transaction_id = $request->input('transaction_id');

        $subscription = Subscription::find($subscription_id);

        if ($payment_type == PaymentTypeEnum::OFFLINE) {

            $payment = new Payment();
            $payment->subscribed_id = $subscription->subscribed_id;
            $payment->subscription_id = $subscription_id;
            $payment->transaction_id = $transaction_id;
            $payment->payment_type = $payment_type;
            $payment->price = $subscription->price;

            if ($payment->save()) {

                $subscription_type = $subscription->subscription_type;

                $duration_type = DurationEnum::MONTHLY;
                $limit = 1;
                if ($subscription_type == SubscriptionTypeEnum::PLAN) {
                    $model = Plan::find($subscription->subscription_id);
                    $limit = $model->duration;
                } else if ($subscription_type == SubscriptionTypeEnum::PACKAGE) {
                    $model = Package::find($subscription->subscription_id);
                    $limit = $model->duration_limit;
                    $duration_type = $model->duration_type->slug;
                }
                $subscription->renewal_date = Carbon::now();
                $from_date = Carbon::now();
                $subscription->expire_date = GeneralService::get_remaining_time($duration_type, $limit, $from_date);
                $subscription->save();

                DB::table(TableEnum::SUBSCRIPTION_LOGS)->insert([
                    'subscribed_id' => $subscription->subscribed_id,
                    'subscription_id' => $subscription_id,
                    'price' => $subscription->price,
                    'created_at' => Carbon::now(),
                                        'updated_at' => Carbon::now()
                ]);
            }
        }
        return response()->json([
            'status' => true
        ]);
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Duration::class);
        $model = Duration::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_duration'),
            'model' => $model,
        ];

        return view('dashboard.subscription-management.durations.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(DurationRequest $request, $id)
    {
        $this->authorize('update', Duration::class);
        if ($request->updateData($id)) {
                return redirect()->route('dashboard.durations.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('dashboard.durations.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(DurationRequest $request, $id)
    {
        $this->authorize('delete', Duration::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.durations.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
