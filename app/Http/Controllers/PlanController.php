<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanManagement\PlanRequest;
use App\Models\Plan;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class PlanController extends Controller
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
        $this->authorize('view', Plan::class);
        $records = Plan::with('basic_services', 'additional_services')->get();
        $params = [
            'pageTitle' => __('general.plans'),
            'records' => $records
        ];

        return view('dashboard.plan-management.plans.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', Plan::class);
        $params = [
            'pageTitle' => __('general.new_plan'),
        ];

        return view('dashboard.plan-management.plans.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(PlanRequest $request)
    {
        $this->authorize('create', Plan::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.plans.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.plans.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Plan::class);
        $model = Plan::with('basic_services', 'additional_services')->find($id);
        $params = [
            'pageTitle' => __('general.edit_installment_plan'),
            'model' => $model
        ];

        return view('dashboard.plan-management.plans.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(PlanRequest $request, $id)
    {
        $this->authorize('update', Plan::class);
        if ($request->updateData($id)) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.plans.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('dashboard.plans.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(PlanRequest $request, $id)
    {
        $this->authorize('delete', Plan::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.plans.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
