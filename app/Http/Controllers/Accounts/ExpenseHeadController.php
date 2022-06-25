<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accounts\ExpenseHeadRequest;
use App\Models\Accounts\ExpenseHead;

class ExpenseHeadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $records = ExpenseHead::get();
        $params = [
            'pageTitle' => __('general.expense_heads'),
            'records' => $records,
        ];

        return view('dashboard.accounts.expense-head.index', $params);
    }

    public function create()
    {
        $parentHeads = ExpenseHead::whereParentId('0')
            ->orderBy('expense_head_name', 'ASC')->pluck('expense_head_name', 'id');
        $params = [
            'pageTitle' => __('general.new_expense_head'),
            'parentHeads' => $parentHeads,
        ];

        return view('dashboard.accounts.expense-head.create', $params);
    }

    public function store(ExpenseHeadRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.expense.heads.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.expense.heads.index')
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
        $parentHeads = ExpenseHead::whereParentId('0')
            ->orderBy('expense_head_name', 'ASC')->pluck('expense_head_name', 'id');
        $model = ExpenseHead::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_expense_head'),
            'parentHeads' => $parentHeads,
            'model' => $model,
        ];

        return view('dashboard.accounts.expense-head.edit', $params);
    }

    public function update(ExpenseHeadRequest $request, $id)
    {
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.expense.heads.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(ExpenseHeadRequest $request, $id)
    {
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.expense.heads.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
