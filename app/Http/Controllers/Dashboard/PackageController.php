<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\PackageTypeEnum;
use App\Enum\PaymentTypeProcessEnum;
use App\Enum\RoleEnum;
use App\Enum\SubscriptionTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Models\Package;
use App\Models\Service;
use App\Services\GeneralService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function __;
use function auth;
use function redirect;
use function view;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(Request $request): Factory|View|Application
    {
        $this->authorize('view', Package::class);
        $type = $request->query('type');
        $package_id = $request->query('package_id');
        $records = Package::with('duration_type')
            ->wherePackageType($type)
            ->paginate(20);
        $params = [
            'pageTitle' => __('general.packages'),
            'records' => $records,
            'type' => $type,
            'package_id' => $package_id
        ];
        return view('dashboard.packages.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(Request $request): Factory|View|Application
    {
        $this->authorize('create', Package::class);
        $type = $request->input('type');
        $model_id = $request->query('model_id');
        $services = Service::whereType($type)->whereStatus(true)->get();
        $params = [
            'pageTitle' => __('general.new_package'),
            'type' => $type,
            'services' => $services,
            'model_id' => $model_id
        ];
        return view('dashboard.packages.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(PackageRequest $request)
    {
        $this->authorize('create', Package::class);
        $package_type = $request->input('package_type');
        $model_id = $request->input('model_id');
        $data = $request->createData();
        if ($model_id) {
            $model = GeneralService::get_model_by_type_and_id($package_type, $model_id);
            GeneralService::applySubscription(
                $data->id,
                $model->user->id,
                time(),
                null
            );
            if (in_array($package_type, [PackageTypeEnum::FREELANCER, PackageTypeEnum::SERVICE_PROVIDER_COMPANY])) {
                return redirect()->route('dashboard.freelancers.index', ['type' => PaymentTypeProcessEnum::PRE_PAYMENT])
                    ->with('success', 'Subscription Created Successfully');
            } else if (in_array($package_type, [PackageTypeEnum::BUSINESS_ACCELERATOR, PackageTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL])) {
                return redirect()->route('dashboard.ba.index', ['type' => PaymentTypeProcessEnum::PRE_PAYMENT])
                    ->with('success', 'Subscription Created Successfully');
            } else{
                return redirect()->route('dashboard.mentors.index', ['type' => PaymentTypeProcessEnum::PRE_PAYMENT])
                    ->with('success', 'Subscription Created Successfully');
            }
        }
        if ($data) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.packages.create', ['type' => $package_type])
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.packages.index', ['type' => $package_type])
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id)
    {
        $this->authorize('update', Package::class);
        $model = Package::findorFail($id);
        $old_services = $model->services;
        $type = $model->package_type;
        $services = Service::whereType($type)->whereStatus(true)->get();
        $params = [
            'pageTitle' => __('general.edit_package'),
            'model' => $model,
            'type' => $type,
            'services' => $services,
            'old_services' => $old_services
        ];

        return view('dashboard.packages.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(PackageRequest $request, $id)
    {
        $type = $request->input('package_type');
        $this->authorize('update', Package::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.packages.index', ['type' => $type])
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(PackageRequest $request, $id)
    {
        $this->authorize('delete', Package::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.packages.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function sendRenewalRequest(): RedirectResponse
    {
        return redirect()
            ->back()
            ->with('success', 'Renewal Request has send to admin you will receive notification while Approval');
    }
}
