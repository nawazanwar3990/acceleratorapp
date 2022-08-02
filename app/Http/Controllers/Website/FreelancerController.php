<?php

namespace App\Http\Controllers\Website;

use App\Enum\FreelancerTypeEnum;
use App\Enum\MediaTypeEnum;
use App\Enum\StepEnum;
use App\Http\Controllers\Controller;
use App\Models\Freelancer;
use App\Models\Media;
use App\Models\Subscription;
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
        $this->makeMultipleDirectories('sp', ['images']);
        $this->makeMultipleDirectories('subscription', ['receipts']);
    }

    public function index()
    {
        //
    }

    public function create(
        Request $request,
                $step,
                $id = null
    )
    {

        if (!$step) {
            return view('website.freelancer.create');
        }

        $model = null;
        $subscription = null;
        $prev_step = null;
        if ($id) {
            $model = Freelancer::with('focal_persons')->find($id);
        }
        if ($step == StepEnum::PRINT) {
            $subscription = Subscription::where('subscribed_id', $model->user->id)->first();
            return view('website.freelancer.print', compact(
                'step',
                'model',
                'prev_step',
                'subscription',
                'id'
            ));
        }
        return view('website.freelancer.step', compact(
            'step',
            'model',
            'prev_step',
            'subscription',
            'id'
        ));
    }

    public function store(Request $request, $step, $id = null)
    {
        $model = null;
        if ($id) {
            $model = Freelancer::with('focal_persons')->find($id);
        }
        if ($step) {
            switch ($step) {
                case StepEnum::STEP1;
                    $model = $this->freelancerService->saveCompanyProfile($model->type, $model);
                    return redirect()->route('website.freelancers.create', [StepEnum::STEP2, $model->id]);
                    break;
                case StepEnum::STEP2;
                    $model = $this->freelancerService->saveServices($model->type, $model);
                    if ($request->has('services')) {
                        if ($model->type == FreelancerTypeEnum::INDIVIDUAL) {
                            return redirect()->route('website.freelancers.create', [StepEnum::STEP4, $model->id]);
                        } else {
                            return redirect()->route('website.freelancers.create', [StepEnum::STEP3, $model->id]);
                        }
                    } else {
                        return redirect()->back()->withInput()->with('error', 'First Choose Services');
                    }
                    break;
                case StepEnum::STEP3;
                    $model = $this->freelancerService->saveFocalPersonInfo($model->type, $model);
                    return redirect()->route('website.freelancers.create', [StepEnum::STEP4, $model->id]);
                    break;
                case StepEnum::STEP4;
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

                    $model = $this->freelancerService->saveUseInfo($model->type, $model, $user_id);
                    return redirect()->route('website.freelancers.create', [StepEnum::STEP5, $model->id]);
                    break;
                case StepEnum::STEP5;
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
        } else {
            $type = $request->input('type');
            $model = $this->freelancerService->saveStep1($type, $model);
            if ($model->type == FreelancerTypeEnum::INDIVIDUAL) {
                return redirect()->route('website.freelancers.create', [StepEnum::STEP2, $model->id]);
            } else {
                return redirect()->route('website.freelancers.create', [StepEnum::STEP1, $model->id]);
            }

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
                'record_type' => MediaTypeEnum::SUBSCRIPTION_RECEIPT,
                'created_by' => $subscription_id
            ]);
        }
        return redirect()->back()->with('upload_receipt_success', 'Your Receipt is Successfully Uploaded,Please Wait,We will Let You While While Approving Your Subscription');
    }
}
