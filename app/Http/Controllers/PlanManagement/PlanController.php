<?php

namespace App\Http\Controllers\PlanManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanManagement\PlanRequest;
use App\Models\Sales\Plan;
use App\Services\InstallmentService;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class PlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('view', Plan::class);
        $records = Plan::orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.installment_plans'),
            'records' => $records,
        ];

        return view('dashboard.installment-plans.index', $params);
    }

    public function create()
    {
        $this->authorize('create', Plan::class);
        $params = [
            'pageTitle' => __('general.new_installment_plan'),
        ];

        return view('dashboard.installment-plans.create', $params);
    }

    public function store(PlanRequest $request)
    {
        $this->authorize('create', Plan::class);
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
        $this->authorize('view', Plan::class);
        $records = Plan::findOrFail($id);
        $params = [
            'pageTitle' => __('general.installment_plans_print'),
            'records' => $records,
        ];

        return view('dashboard.print.installment-plan.print-view', $params);
    }

    public function edit($id)
    {
        $this->authorize('update', Plan::class);
        $model = Plan::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_installment_plan'),
            'model' => $model,
        ];

        return view('dashboard.installment-plans.edit', $params);
    }

    public function update(PlanRequest $request, $id)
    {
        $this->authorize('update', Plan::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.installment-plans.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(PlanRequest $request, $id)
    {
        $this->authorize('delete', Plan::class);
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
            $record = Plan::create($request->all());
            $output = ['success' => true, 'msg' => '', 'data' => $record];
        }

        return $output;
    }
}
