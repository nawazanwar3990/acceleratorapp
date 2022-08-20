<?php

namespace App\Http\Controllers;

use App\Enum\PaymentForEnum;
use App\Enum\SubscriptionStatusEnum;
use App\Models\PaymentReceipt;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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

    public function viewPendingSubscription(Request $request): Factory|View|RedirectResponse|Application
    {
        $pageTitle = trans('general.pending_subscription');
        $subscription_id = $request->query('subscription_id');
        $subscription_type = $request->input('subscription_type');
        $subscribed_id = $request->query('subscribed_id');
        $user = User::find($subscribed_id);
        $subscription = Subscription::where('subscribed_id', $subscribed_id)->first();
        if ($subscription->status == SubscriptionStatusEnum::APPROVED) {
            Auth::attempt([
                'email' => $user->email,
                'password' => $user->normal_password
            ]);
            return redirect()->route('website.index')->with('success', 'Your Subscription has Approved');
        }
        $receipt = PaymentReceipt::with('subscription', 'subscribed')
            ->where('payment_for', PaymentForEnum::PACKAGE_APPROVAL)
            ->where('subscribed_id', $subscribed_id)
            ->where('subscription_id', $subscription_id)
            ->where('is_processed', false);
        if ($receipt->exists()) {
            $receipt = $receipt->first();
            Session::put('info', "Your Receipt has Received By Super admin and let you know after approved your Subscription");
        } else {
            if (\auth()->guest()) {
                Session::put('info', $user->payment_token_number . "  is your payment code. Please submit your payment receipt for approved you subscription.");
            }
            $receipt = null;
        }
        return view('website.subscriptions.pending', compact(
            'pageTitle',
            'subscription',
            'user',
            'receipt',
            'subscription_type',
            'subscription_id'
        ));
    }
}
