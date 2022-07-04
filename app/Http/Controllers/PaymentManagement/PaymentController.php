<?php

namespace App\Http\Controllers\PaymentManagement;

use App\Enum\PackageTypeEnum;
use App\Enum\PaymentTypeEnum;
use App\Enum\TableEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageManagement\DurationRequest;
use App\Http\Requests\PackageManagement\PackageRequest;
use App\Http\Requests\WorkingSpace\FlatRequest;
use App\Models\PackageManagement\Duration;
use App\Models\PackageManagement\Package;
use App\Models\PackageManagement\Subscription;
use App\Models\PaymentManagement\Payment;
use App\Models\WorkingSpace\Flat;
use App\Services\GeneralService;
use Carbon\Carbon;
use Carbon\Language;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function __;
use function redirect;
use function view;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', Payment::class);
        $records = Duration::all();
        $params = [
            'pageTitle' => __('general.payments'),
            'records' => $records,
        ];
        return view('dashboard.payment-management.payments.index', $params);
    }

    public function store(Request $request): JsonResponse
    {
        $payment_type = $request->payment_type;

        $subscription_id = $request->subscription_id;

        if ($payment_type == PaymentTypeEnum::OFFLINE) {
            $model = Payment::create($request->all());
            if ($model) {

                $package_id = $model->package_id;
                $package = Package::find($package_id);
                $limit = $package->duration_limit;
                $from_date = Carbon::now();
                $duration_type = $package->duration_type->slug;
                $subscription = Subscription::find($subscription_id);
                $subscription->renewal_date = Carbon::now();
                $subscription->expire_date = GeneralService::get_remaining_time($duration_type, $limit, $from_date);
                $subscription->save();

                DB::table(TableEnum::SUBSCRIPTION_LOGS)->insert([
                    'subscribed_id' => $model->subscribed_id,
                    'subscription_id' => $subscription_id,
                    'package_id' => $model->package_id,
                    'price' => $package->price,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
            }
        }
        return response()->json([
            'status' => true
        ]);
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Duration::class);
        $model = Duration::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_duration'),
            'model' => $model,
        ];

        return view('dashboard.package-management.durations.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(DurationRequest $request, $id)
    {
        $this->authorize('update', Duration::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.durations.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(DurationRequest $request, $id)
    {
        $this->authorize('delete', Duration::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.durations.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}