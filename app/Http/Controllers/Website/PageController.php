<?php

namespace App\Http\Controllers\Website;

use App\Enum\MediaTypeEnum;
use App\Enum\SubscriptionStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use function __;
use function session;
use function view;

class PageController extends Controller
{
    public function verifyUserEmailSuccess(): Factory|View|Application
    {
        $user = session()->get('register_user');
        $pageTitle = __('general.verify_email_address_message');
        return view('website.pages.verify-user-email-success', compact('pageTitle', 'user'));
    }

    public function expire(): Factory|View|Application
    {
        $pageTitle = 'Package Has Expire';
        return view('website.pages.expire', compact('pageTitle'));
    }

    public function baPendingSubscription(Request $request)
    {
        $pageTitle = 'Pending Subscription';
        $subscribed_id = $request->query('subscribed_id');
        $user = User::find($subscribed_id);
        $subscription = Subscription::where('subscribed_id', $subscribed_id)->first();
        if ($subscription->status == SubscriptionStatusEnum::APPROVED) {
            Auth::attempt([
                'email' => $user->email,
                'password' => $user->normal_password
            ]);
            return redirect()->route('website.index')->with('success','Your Subscription has Approved');
        }
        $media = Media::where('record_id', $subscription->id)->whereRecordType(MediaTypeEnum::SUBSCRIPTION_RECEIPT)->exists();
        if ($media) {
            Session::put('info', "Your Receipt has Received By Super admin and let you know after approved your Subscription");
        } else {
            Session::put('info', $user->payment_token_number . "  is your payment code please Summit your payment receipt for approved you Subscription");
        }
        return view('website.pages.ba-pending-subscription', compact('pageTitle', 'subscription', 'user', 'media'));
    }
}
