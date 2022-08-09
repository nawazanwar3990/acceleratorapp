<?php

namespace App\Http\Controllers\Website;

use App\Enum\AcceleratorTypeEnum;
use App\Enum\MediaTypeEnum;
use App\Enum\PaymentTypeProcessEnum;
use App\Enum\StepEnum;
use App\Http\Controllers\Controller;
use App\Models\BA;
use App\Models\Freelancer;
use App\Models\Media;
use App\Models\Subscription;
use App\Services\BaService;
use App\Services\FreelancerService;
use App\Services\GeneralService;
use App\Traits\General;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class FreelancerController extends Controller
{
    use General;

    public function __construct(
        private FreelancerService $freelancerService
    )
    {
        $this->makeMultipleDirectories('ba', ['images']);
        $this->makeMultipleDirectories('subscription', ['receipts']);
    }

    public function index()
    {
        //
    }

    public function create(
        Request $request,
                $type,
                $payment,
                $step,
                $id = null
    )
    {

        $model = null;
        $subscription = null;
        $prev_step = null;
        if ($id) {
            $model = Freelancer::find($id);
        }
        if (in_array($step, [
                StepEnum::SERVICES,
                StepEnum::COMPANY_PROFILE,
                StepEnum::PACKAGES,
                StepEnum::FOCAL_PERSON
            ]) && !isset($model)) {
            return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::USER_INFO])->with('error', 'First Create User Info');
        } else if ($step == StepEnum::PACKAGES && isset($model) && !isset($model->services)) {
            return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::SERVICES])->with('error', 'First Create Services');
        }
        if ($step == StepEnum::PRINT) {
            $subscription = Subscription::where('subscribed_id', $model->user->id)->first();
            return view('website.freelancers.print', compact(
                'step',
                'model',
                'prev_step',
                'subscription',
                'id'
            ));
        }
        return view('website.freelancers.step', compact(
            'step',
            'model',
            'prev_step',
            'subscription',
            'type',
            'payment',
            'id'
        ));
    }

    public function store(
        Request $request,
                $type,
                $payment,
                $step,
                $id = null
    )
    {
        $model = null;
        if ($id) {
            $model = Freelancer::find($id);
        }
        switch ($step) {
            case StepEnum::COMPANY_PROFILE;
                $model = $this->freelancerService->saveCompanyProfile($model);
                return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::FOCAL_PERSON, $model->id]);
                break;
            case StepEnum::SERVICES;
                $model = $this->freelancerService->saveServices($model);
                if ($request->has('services')) {
                    if ($payment == PaymentTypeProcessEnum::DIRECT_PAYMENT) {
                        return redirect()->route('website.freelancers.create', [$type,$payment, StepEnum::PACKAGES, $model->id]);
                    } else {
                        return redirect()
                            ->route('website.index')
                            ->with('info', 'Your request is successfully submitted,we will send you a package on the basic of your selected services');
                    }
                } else {
                    return redirect()->back()->withInput()->with('error', 'First Choose Services');
                }
                break;
            case StepEnum::USER_INFO;
                $user_id = $request->input('user_id', null);
                if ($user_id) {
                    $request->validate([
                        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user_id],
                        'password' => ['required', 'string', 'min:8', 'confirmed']
                    ]);
                } else {
                    $request->validate([
                        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                        'password' => ['required', 'string', 'min:8', 'confirmed']
                    ]);
                }

                $response = $this->freelancerService->saveUseInfo(
                    $type,
                    $payment,
                    $model,
                    $user_id
                );
                if ($type == 'Company') {
                    return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::COMPANY_PROFILE, $response->id]);
                } else {
                    return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::SERVICES, $response->id]);
                }
                break;
            case StepEnum::FOCAL_PERSON;
                $response = $this->freelancerService->saveFocalPersonInfo($model);
                return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::SERVICES, $response->id]);
                break;
            case StepEnum::PACKAGES;
                $response = $this->freelancerService->applySubscription($model->type);
                $payment_type = $request->input('payment_type');
                if ($payment_type == 'pre_apply') {
                    $url = route('website.index');
                    Session::put('info', $model->user->payment_token_number . "  is your registration number please wait for admin approval");
                } else {
                    $url = route('website.freelancers.create', [StepEnum::PRINT, $model->id]);
                }
                return response()->json([
                    'status' => $response,
                    'url' => $url
                ]);
                break;
        }
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
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
