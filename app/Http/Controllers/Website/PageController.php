<?php

namespace App\Http\Controllers\Website;

use App\Enum\MediaTypeEnum;
use App\Enum\SubscriptionStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Subscription;
use App\Models\User;
use App\Services\GeneralService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
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

    public function pending_subscription(Request $request): Factory|View|RedirectResponse|Application
    {
        $pageTitle = 'Pending Subscription';

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
            return redirect()->route('website.index')->with('success','Your Subscription has Approved');
        }
        $media = Media::where('record_id', $subscription->id)->whereRecordType(MediaTypeEnum::SUBSCRIPTION_RECEIPT);
        if ($media->exists()) {
            $media = $media->first();
            Session::put('info', "Your Receipt has Received By Super admin and let you know after approved your Subscription");
        } else {
            if (\auth()->guest()){
                Session::put('info', $user->payment_token_number . "  is your payment code. Please submit your payment receipt for approved you subscription.");
            }
            $media=null;
        }

        return view('website.pages.pending-subscription', compact(
            'pageTitle',
            'subscription',
            'user',
            'media',
            'subscription_type',
            'subscription_id'
        ));
    }
    public function storePaymentSnippet(Request $request): RedirectResponse
    {
        $subscription_id = $request->input('subscription_id');
        if (request()->file('receipt')) {
            $uploadedFile = request()->file('receipt');
            $path = 'uploads/subscription/receipts/' . GeneralService::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            Media::create([
                'filename' => $path,
                'record_id' => $subscription_id,
                'record_type' => MediaTypeEnum::SUBSCRIPTION_RECEIPT
            ]);
        }
        return redirect()->back()->with('upload_receipt_success', 'Your Receipt is Successfully Uploaded,Please Wait,We will Let You While While Approving Your Subscription');
    }
}
