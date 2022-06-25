<?php

namespace App\Http\Controllers\RealEstate\Sales;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Sales\InstallmentPlanRequest;
use App\Models\Sales\InstallmentPlan;
use App\Services\RealEstate\BuildingService;
use App\Services\RealEstate\InstallmentService;
use Illuminate\Http\Request;

class InstallmentPlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('view', InstallmentPlan::class);
        $records = InstallmentPlan::whereBuildingId(BuildingService::getBuildingId())->orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.installment_plans'),
            'records' => $records,
        ];

        return view('dashboard.real-estate.installment-plans.index', $params);
    }

    public function create()
    {
        $this->authorize('create', InstallmentPlan::class);
        $params = [
            'pageTitle' => __('general.new_installment_plan'),
        ];

        return view('dashboard.real-estate.installment-plans.create', $params);
    }

    public function store(InstallmentPlanRequest $request)
    {
        $this->authorize('create', InstallmentPlan::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.installment-plans.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.installment-plans.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function show($id)
    {
        $this->authorize('view', InstallmentPlan::class);
        $records = InstallmentPlan::findOrFail($id);
        $params = [
            'pageTitle' => __('general.installment_plans_print'),
            'records' => $records,
        ];

        return view('dashboard.real-estate.print.installment-plan.print-view', $params);
    }

    public function edit($id)
    {
        $this->authorize('update', InstallmentPlan::class);
        $model = InstallmentPlan::whereBuildingId(BuildingService::getBuildingId())->findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_installment_plan'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.installment-plans.edit', $params);
    }

    public function update(InstallmentPlanRequest $request, $id)
    {
        $this->authorize('update', InstallmentPlan::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.installment-plans.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(InstallmentPlanRequest $request, $id)
    {
        $this->authorize('delete', InstallmentPlan::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.installment-plans.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getInstallmentPlanDetails(Request $request) {
        return InstallmentService::getInstallmentPlanDetailsForJS($request);
    }

    public function addInstallmentPlanAjax(Request $request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $record = InstallmentPlan::create($request->all());
            $output = ['success' => true, 'msg' => '', 'data' => $record];
        }

        return $output;
    }
}
