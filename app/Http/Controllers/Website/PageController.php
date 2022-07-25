<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
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

    public function baPendingSubscription(Request $request): Factory|View|Application
    {
        $pageTitle = 'Pending Subscription';
        $subscribed_id = $request->query('subscribed_id');
        $subscription = Subscription::where('subscribed_id',$subscribed_id)->first();
        return view('website.pages.ba-pending-subscription', compact('pageTitle','subscription'));
    }
}
