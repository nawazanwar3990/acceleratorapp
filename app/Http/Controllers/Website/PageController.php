<?php

namespace App\Http\Controllers\Website;

use App\Enum\MediaTypeEnum;
use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Services\GeneralService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
