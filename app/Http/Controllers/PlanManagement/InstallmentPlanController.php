<?php

namespace App\Http\Controllers\PlanManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanManagement\InstallmentPlanRequest;
use App\Models\PlanManagement\InstallmentPlan;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class InstallmentPlanController extends Controller
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
        $this->authorize('view', InstallmentPlan::class);
        $records = InstallmentPlan::all();
        $params = [
            'pageTitle' => __('general.installment_plans'),
            'records' => $records
        ];

        return view('dashboard.plan-management.installment-plans.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', InstallmentPlan::class);
        $params = [
            'pageTitle' => __('general.new_installment_plan'),
        ];

        return view('dashboard.plan-management.installment-plans.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(InstallmentPlanRequest $request)
    {
        $this->authorize('create', InstallmentPlan::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.installment-plans.create')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }


    /*  public function show($id): Factory|View|Application
      {
          $this->authorize('view', InstallmentPlan::class);
          $records = InstallmentPlan::findOrFail($id);
          $params = [
              'pageTitle' => __('general.installment_plans_print'),
              'records' => $records,
          ];

          return view('dashboard.plan-management.installment-plan.print-view', $params);
      }*/

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', InstallmentPlan::class);
        $params = [
            'pageTitle' => __('general.edit_installment_plan'),
        ];

        return view('dashboard.plan-management.installment-plans.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(InstallmentPlanRequest $request, $id)
    {
        $this->authorize('update', InstallmentPlan::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.installment-plans.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(InstallmentPlanRequest $request, $id)
    {
        $this->authorize('delete', InstallmentPlan::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.installment-plans.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    /* public function getInstallmentPlanDetails(Request $request)
     {
         return InstallmentService::getInstallmentPlanDetailsForJS($request);
     }

     public function addInstallmentPlanAjax(Request $request)
     {
         $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
         if ($request->ajax()) {
             $record = InstallmentPlan::create($request->all());
             $output = ['success' => true, 'msg' => '', 'data' => $record];
         }

         return $output;
     }*/
}
