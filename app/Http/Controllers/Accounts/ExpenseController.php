<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accounts\ExpenseRequest;
use App\Models\Accounts\Expense;
use App\Models\Accounts\ExpenseHead;
use App\Services\RealEstate\BuildingService;
use App\Traits\General;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    use General;

    public function __construct()
    {
        $this->makeDirectory('expense');
        $this->middleware('auth');
    }

    public function index()
    {
        $records = Expense::whereBuildingId(BuildingService::getBuildingId())
            ->orderBy('date', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.expenses'),
            'records' => $records,
        ];

        return view('dashboard.accounts.expenses.index', $params);
    }

    public function create()
    {
        $params = [
            'pageTitle' => __('general.new_expense'),
        ];

        return view('dashboard.accounts.expenses.create', $params);
    }

    public function store(ExpenseRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.expenses.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.expenses.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(ExpenseRequest $request, $id)
    {
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.expenses.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(ExpenseRequest $request, $id)
    {
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.expenses.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function markAsPaid(ExpenseRequest $request) {
        return $request->markPaid();
    }
}
