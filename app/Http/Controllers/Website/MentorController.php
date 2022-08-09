<?php

namespace App\Http\Controllers\Website;

use App\Enum\MediaTypeEnum;
use App\Enum\PaymentTypeProcessEnum;
use App\Enum\StepEnum;
use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Mentor;
use App\Models\Subscription;
use App\Services\GeneralService;
use App\Services\MentorService;
use App\Traits\General;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class MentorController extends Controller
{
    use General;

    public function __construct(
        private MentorService $mentorService
    )
    {
        $this->makeMultipleDirectories('mentors', ['images']);
        $this->makeMultipleDirectories('subscription', ['receipts']);
    }

    public function create(
        Request $request,
                $payment,
                $step,
                $id = null
    )
    {

        $model = null;
        $subscription = null;
        $prev_step = null;
        if ($id) {
            $model = Mentor::with('qualifications', 'certifications', 'projects')->find($id);
        }
        if (in_array($step, [
                StepEnum::SERVICES,
                StepEnum::PACKAGES
            ]) && !isset($model)) {
            return redirect()->route('website.mentors.create', [$payment, StepEnum::USER_INFO])->with('error', 'First Create User Info');
        } else if ($step == StepEnum::PACKAGES && isset($model) && !isset($model->services)) {
            return redirect()->route('website.mentors.create', [$payment, StepEnum::SERVICES])->with('error', 'First Create Services');
        }
        if ($step == StepEnum::PRINT) {
            $subscription = Subscription::where('subscribed_id', $model->user->id)->first();
            return view('website.mentor.print', compact(
                'step',
                'model',
                'prev_step',
                'subscription',
                'id',
                'payment'
            ));
        }
        return view('website.mentor.step', compact(
            'payment',
            'step',
            'model',
            'prev_step',
            'subscription',
            'id'
        ));
    }

    public function store(Request $request,
                                  $payment,
                                  $step,
                                  $id = null)
    {
        $model = null;
        if ($id) {
            $model = Mentor::find($id);
        }
        if ($step) {
            switch ($step) {
                case StepEnum::SERVICES:
                    $model = $this->mentorService->saveServices($model);
                    if ($request->has('services')) {
                        if ($payment == PaymentTypeProcessEnum::DIRECT_PAYMENT) {
                            return redirect()->route('website.mentors.create', [$payment, StepEnum::PACKAGES, $model->id]);
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
                    $model = $this->mentorService->saveUseInfo(
                        $payment,
                        $model,
                        $user_id
                    );
                    return redirect()->route('website.mentors.create', [$payment, StepEnum::SERVICES, $model->id]);
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
                    $url = route('website.mentors.create', [$payment,StepEnum::PRINT, $model->id]);
                    return response()->json([
                        'status' => $response,
                        'url' => $url
                    ]);
                    break;
            }
        }
    }
}
