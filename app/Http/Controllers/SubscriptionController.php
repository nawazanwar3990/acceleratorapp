<?php

namespace App\Http\Controllers;

use App\Enum\PaymentForEnum;
use App\Enum\SubscriptionStatusEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Models\PaymentReceipt;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use App\Services\GeneralService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SubscriptionController extends Controller
{
    public function expire(): Factory|View|Application
    {
        $pageTitle = trans('general.package_expire');
        $subscription = \auth()->user()->subscription;
        $user = User::find($subscription->subscribe_id);
        $receipt = PaymentReceipt::with('subscription', 'subscribed')
            ->where('payment_for', PaymentForEnum::PACKAGE_EXPIRE)
            ->where('subscribed_id', $subscription->subscribed_id)
            ->where('subscription_id', $subscription->id)
            ->where('is_processed', false);
        if ($receipt->exists()) {
            $receipt = $receipt->first();
            Session::put('info', "Your Receipt has Received By Super admin and let you know after renew your Subscription");
        } else {
            if (\auth()->guest()) {
                Session::put('info', $user->payment_token_number . "  is your payment code. Please submit your payment receipt for approved you subscription.");
            }
            $receipt = null;
        }
        return view('website.subscriptions.expire', compact(
            'pageTitle',
            'subscription',
            'receipt'
        ));
    }

    public function viewPendingSubscription(Request $request, $id, $type)
    {
        $pageTitle = trans('general.pending_subscription');
        $subscription = Subscription::find($id);
        if ($subscription->status == SubscriptionStatusEnum::APPROVED) {
            Auth::attempt([
                'email' => $subscription->subscribed->email,
                'password' => $subscription->subscribed->normal_password
            ]);
            return redirect()->route('website.index')->with('success', 'Your Subscription has Approved');
        }
        $receipt = PaymentReceipt::with('subscription', 'subscribed')
            ->where('payment_for', PaymentForEnum::PACKAGE_APPROVAL)
            ->where('subscribed_id', $subscription->subscribed->id)
            ->where('subscription_id', $subscription->id)
            ->where('is_processed', false);
        if ($receipt->exists()) {
            $receipt = $receipt->first();
            Session::put('info', "Your Receipt has Received By Super admin and let you know after approved your Subscription");
        } else {
            if (\auth()->guest()) {
                Session::put('info', $subscription->subscribed->payment_token_number . "  is your payment code. Please submit your payment receipt for approved you subscription.");
            }
            $receipt = null;
        }
        return view('website.subscriptions.pending', compact(
            'pageTitle',
            'subscription',
            'receipt',
            'type',
            'id',
        ));
    }

    public function storeOfficeSubscription(Request $request)
    {
        $subscription_id = $request->input('subscription_id');
        $subscribed_id = $request->input('subscribed_id');
        $payment_type = $request->input('payment_type');
        $transaction_id = $request->input('transaction-id');
        $model_id = $request->input('model_id');
        $model_type = $request->input('model_type');
        $owner_id = $request->input('owner_id');

        $subscription = new Subscription();

        $subscription->subscribed_id = $subscribed_id;
        $subscription->subscription_id = $subscription_id;
        $subscription->owner_id = $owner_id;

        $subscription->model_id = $model_id;
        $subscription->model_type = $model_type;
        $plan = Plan::find($subscription_id);
        $subscription->price = $plan->price;
        $subscription->created_by = auth()->id();
        $subscription->subscripton_type = SubscriptionTypeEnum::PLAN;
        $subscription->status = SubscriptionStatusEnum::PENDING;
        $subscription->save();
        $receipt = PaymentReceipt::create([
            'subscription_id' => $subscription_id,
            'subscribed_id' => $subscribed_id,
            'payment_type' => $payment_type,
            'transaction_id' => $transaction_id,
            'price' => $plan->price,
            'payment_for' => PaymentForEnum::OFFICE_SUBSCRIPTION_APPROVAL,

        ]);
        if ($request->hasFile('file_name')) {
            $file = $request->file('file_name');
            $file_name = GeneralService::generateFileName($file);
            $file_path = 'uploads/receipts/' . $file_name;
            $file->move('uploads/receipts/', $file_name);
            $receipt->file_name = $file_path;
            $receipt->save();
        }
        session(['info' => trans('general.receipt_uploaded_message')]);
        if ($receipt) {
            return response()->json([
                'status' => true
            ]);
        }
    }
}
