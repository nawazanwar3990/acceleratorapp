<?php

namespace App\Http\Controllers\Dashboard\Plans;

use App\Http\Controllers\Controller;
use App\Http\Requests\Plans\PlanRequest;
use App\Models\Plans\Plan;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function view;

class PlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): Factory|View|Application
    {
        $records = Plan::orderBy('id', 'DESC')->get();
        $params = [
            'pageTitle' => __('general.plans'),
            'records' => $records,
        ];
        return view('dashboard.plans.plan.index', $params);
    }

    public function create(): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_plan'),
        ];
        return view('dashboard.plans.plan.create', $params);
    }

    public function store(PlanRequest $request)
    {
        if ($request->createData()) {
            return redirect()->route('dashboard.plans.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    public function edit(Request $request, Plan $plan): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($plan->name),
            'model' => $plan
        ];
        return view('dashboard.plans.plan.edit', $params);
    }

    public function update(PlanRequest $request, Plan $plan)
    {
        if ($request->updateData($plan)) {
            return redirect()->route('dashboard.plans.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(PlanRequest $request, Plan $plan)
    {
        if ($request->deleteData($plan)) {
            return redirect()->route('dashboard.plans.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
