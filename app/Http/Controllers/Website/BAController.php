<?php

namespace App\Http\Controllers\Website;

use App\Enum\MediaTypeEnum;
use App\Enum\StepEnum;
use App\Http\Controllers\Controller;
use App\Models\BA;
use App\Models\Media;
use App\Models\Subscription;
use App\Services\BaService;
use App\Services\GeneralService;
use App\Traits\General;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class BAController extends Controller
{
    use General;

    public function __construct(
        private BaService $baService
    )
    {
        $this->makeMultipleDirectories('subscription', ['receipts']);
    }

    public function index()
    {
        //
    }

    public function create(Request $request, $step, $id = null): Factory|View|Application
    {
        $model = null;
        $subscription = null;
        if ($id) {
            $model = BA::find($id);
        }
        $prev_step = null;
        if ($step == StepEnum::STEP2) {
            $prev_step = route('website.ba.create', [StepEnum::STEP1]);
        } else if ($step == StepEnum::STEP3) {
            $prev_step = route('website.ba.create', [StepEnum::STEP2, $model->id]);
        } else if ($step == StepEnum::STEP4) {
            $prev_step = route('website.ba.create', [StepEnum::STEP3, $model->id]);
        } else if ($step == StepEnum::STEP5) {
            $prev_step = route('website.ba.create', [StepEnum::STEP4, $model->id]);
        } else if ($step == StepEnum::PRINT) {
            $subscription = Subscription::where('subscribed_id', $model->user->id)->first();
            $prev_step = route('website.ba.create', [StepEnum::STEP5, $model->id]);
        }
        return view('website.ba.create', compact('step', 'model', 'prev_step', 'subscription'));
    }

    public function store(Request $request, $step, $id = null)
    {
        $model = null;
        if ($id) {
            $model = BA::find($id);
        }
        switch ($step) {
            case StepEnum::STEP1;
                $type = $request->input('type');
                $model = $this->baService->saveStep1($type);
                return redirect()->route('website.ba.create', [StepEnum::STEP2, $model->id]);
                break;
            case StepEnum::STEP2;
                $model = $this->baService->saveStep2($model->type, $model);
                return redirect()->route('website.ba.create', [StepEnum::STEP3, $model->id]);
                break;
            case StepEnum::STEP3;
                $model = $this->baService->saveStep3($model->type, $model);
                return redirect()->route('website.ba.create', [StepEnum::STEP4, $model->id]);
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

                $model = $this->baService->saveStep4($model->type, $model, $user_id);
                return redirect()->route('website.ba.create', [StepEnum::STEP5, $model->id]);
                break;
            case StepEnum::STEP5;
                $response = $this->baService->saveStep5($model->type);
                return response()->json([
                    'status' => $response,
                    'url' => route('website.ba.create', [StepEnum::PRINT, $model->id])
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
                'record_type' => MediaTypeEnum::SUBSCRIPTION_RECEIPT,
                'created_by' => $subscription_id
            ]);
        }
        return redirect()->back()->with('upload_receipt_success', 'Your Receipt is Successfully Uploaded,Please Wait,We will Let You While While Approving Your Subscription');
    }
}
