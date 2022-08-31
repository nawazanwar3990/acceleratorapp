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
            return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::USER_INFO,$id??null])->with('error', 'First Create User Info');
        }
        $action = $request->query('action');
        if ($step == StepEnum::PRINT) {
            $subscription = Subscription::where('subscribed_id', $model->user->id)->first();
            return view('website.freelancers.print', compact(
                'step',
                'model',
                'prev_step',
                'subscription',
                'id',
                'type',
                'payment'
            ));
        }
        return view('website.freelancers.step', compact(
            'step',
            'model',
            'prev_step',
            'subscription',
            'type',
            'payment',
            'id',
            'action'
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
        $action = $request->query('action');
        switch ($step) {
            case StepEnum::COMPANY_PROFILE:
                $model = $this->freelancerService->saveCompanyProfile($model);
                if ($action) {
                    return redirect()->back()->with('success', trans('general.record_updated_successfully'));
                }
                return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::FOCAL_PERSON, $model->id]);
                break;
            case StepEnum::SERVICES:
                $model = $this->freelancerService->saveServices($model);
                if ($request->has('services')) {
                    if ($action) {
                        return redirect()->back()->with('success', trans('general.record_updated_successfully'));
                    }
                    if ($payment == PaymentTypeProcessEnum::PRE_DEFINED_PLAN) {
                        return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::PACKAGES, $model->id]);
                    } else {
                        return redirect()
                            ->route('website.index')
                            ->with('info', 'Your request is successfully submitted,we will send you a package on the basic of your selected services');
                    }
                } else {
                    return redirect()->back()->withInput()->with('error', 'First Choose Services');
                }
                break;
            case StepEnum::USER_INFO:
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
                if ($action) {
                    return redirect()->back()->with('success', trans('general.record_updated_successfully'));
                }
                if ($type == 'company') {
                    return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::COMPANY_PROFILE, $response->id]);
                } else {
                    if ($payment==PaymentTypeProcessEnum::PRE_DEFINED_PLAN){
                        return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::PACKAGES, $response->id]);
                    }else{
                        return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::SERVICES, $response->id]);
                    }
                }
                break;
            case StepEnum::FOCAL_PERSON:
                $response = $this->freelancerService->saveFocalPersonInfo($model);
                if ($action) {
                    return redirect()->back()->with('success', trans('general.record_updated_successfully'));
                }
                if ($payment==PaymentTypeProcessEnum::PRE_DEFINED_PLAN){
                    return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::PACKAGES, $response->id]);
                }else{
                    return redirect()->route('website.freelancers.create', [$type, $payment, StepEnum::SERVICES, $response->id]);
                }
                break;
            case StepEnum::PACKAGES:
                $subscription_id = request()->input('subscription_id');
                $subscribed_id = request()->input('subscribed_id');
                $payment_token_number = request()->input('payment_token_number');
                $payment_addition_information = request()->input('payment_addition_information');
                $response = GeneralService::applySubscription(
                    $subscription_id,
                    $subscribed_id,
                    $payment_token_number,
                    $payment_addition_information
                );
                $url = route('website.freelancers.create', [$type, $payment, StepEnum::PRINT, $model->id]);
                return response()->json([
                    'status' => $response,
                    'url' => $url
                ]);
                break;
        }
    }
}
