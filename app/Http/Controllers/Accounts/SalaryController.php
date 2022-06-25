<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accounts\SalaryRequest;
use App\Models\Accounts\Salary;
use App\Services\EmployeeService;
use App\Services\SalaryService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $this->authorize('view', Salary::class);
        $salaryTypes = EmployeeService::getSalaryTypesForDropDown();
        $salaryTypes['3'] = __('general.advance_salary');

        $records = Salary::with('employee.Hr')
            ->when($request->filled('salary_month'), function ($query) use ($request) {
                $salaryMonth = Carbon::parse($request->get('salary_month'))->format('Y-m');
                $query->where('salary_month', $salaryMonth);
            })
            ->when(($request->filled('type') && $request->get('type') == '1'), function ($query) use ($request) {
                $query->where('type', 3); //Daily Wage
            })
            ->when(($request->filled('type') && $request->get('type') == '3'), function ($query) use ($request) {
                $query->where('type', 2); //Advance Salary
            })
            ->when(($request->filled('type') && $request->get('type') == '2'), function ($query) use ($request) {
                $query->where('type', 1); //Monthly Salary
            })
            ->when($request->filled('employee_id'), function ($query) use ($request) {
                $query->where('employee_id', $request->get('employee_id'));
            })
            ->orderByRaw('status DESC, salary_month ASC')->get();
        $params = [
            'pageTitle' => __('general.salary_records'),
            'records' => $records,
            'salaryTypes' => $salaryTypes,
        ];

        return view('dashboard.accounts.salary.index', $params);
    }

    public function create()
    {
        $this->authorize('create', Salary::class);
        $params = [
            'pageTitle' => __('general.create_salary'),
        ];

        return view('dashboard.accounts.salary.create', $params);
    }

    public function store(SalaryRequest $request)
    {
        $this->authorize('create', Salary::class);

        $data = $request->createData();
        if ($request->input('autoSalary') == false) {
            return redirect()->route('dashboard.salary.index')
                ->with('success', __('general.record_created_successfully'));
        } else {
            return $data;
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

    public function update(SalaryRequest $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function salaryPayNow(Request $request) {
        return SalaryService::salaryPay($request);
    }

    public function advanceSalary() {
        $this->authorize('create', Salary::class);
        $params = [
            'pageTitle' => __('general.advance_salary'),
        ];

        return view('dashboard.accounts.salary.advance', $params);
    }

    public function saveAdvanceSalary(SalaryRequest $request) {
        $this->authorize('create', Salary::class);

        if ($request->saveAdvacnceSalary()) {
            return redirect()->route('dashboard.salary.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    public function calculateAdvanceSalary(Request $request) {
        if ($request->ajax()) {
            $employeeID = $request->get('employeeID');
            $salaryMonth = $request->get('salaryMonth');
            return SalaryService::calculateEmployeeAdvanceSalary($employeeID, $salaryMonth);
        }
        return response()->make('invalid request', 404);
    }
}
