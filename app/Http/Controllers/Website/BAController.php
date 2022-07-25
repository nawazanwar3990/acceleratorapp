<?php

namespace App\Http\Controllers\Website;

use App\Enum\MediaTypeEnum;
use App\Enum\StepEnum;
use App\Http\Controllers\Controller;
use App\Models\BA;
use App\Models\Media;
use App\Services\BaService;
use App\Services\GeneralService;
use App\Traits\General;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
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
        if ($id) {
            $model = BA::find($id);
        }
        return view('website.ba.create', compact('step', 'model'));
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
                $request->validate([
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed']
                ]);
                $model = $this->baService->saveStep4($model->type, $model);
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

    public function storePaymentSnippet(Request $request): \Illuminate\Http\RedirectResponse
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
        return redirect()->back('upload_receipt_success', 'Your Receipt is Successfully Uploaded,Please Wait,We will Let You While While Approving Your Subscription');
    }
}
