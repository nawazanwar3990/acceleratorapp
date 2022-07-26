<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\DurationEnum;
use App\Enum\PaymentTypeEnum;
use App\Enum\SubscriptionStatusEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Enum\TableEnum;
use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Payment;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use App\Notifications\ApprovedSubscription;
use App\Services\GeneralService;
use Carbon\Carbon;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function __;
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
      //  $this->authorize('view', Payment::class);
        $id = $request->query('id');
        $records = Payment::with('subscribed', 'subscription')
            ->where('subscription_id', $id)
            ->paginate(20);
        $params = [
            'pageTitle' => __('general.payments'),
            'records' => $records
        ];
        return view('dashboard.payments.index', $params);
    }

    public function store(Request $request): JsonResponse
    {
        $payment_type = $request->input('payment_type');
        $subscription_id = $request->input('subscription_id');
        $transaction_id = $request->input('transaction_id');

        $subscription = Subscription::find($subscription_id);
        $user = User::find($subscription->subscribed_id);

        if ($payment_type == PaymentTypeEnum::OFFLINE) {

            $payment = new Payment();
            $payment->subscribed_id = $subscription->subscribed_id;
            $payment->subscription_id = $subscription_id;
            $payment->transaction_id = $transaction_id;
            $payment->payment_type = $payment_type;
            $payment->price = $subscription->price;

            if ($payment->save()) {
                $type  = $request->input('type');
                if ($type==SubscriptionStatusEnum::APPROVED){
                   $subscription->status = SubscriptionStatusEnum::APPROVED;
                   $subscription->save();
                    /*$user->notify(new ApprovedSubscription());*/
                    return response()->json([
                        'status' => true
                    ]);
                }

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
            }
        }
        return response()->json([
            'status' => true
        ]);
    }
}
