<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use App\Models\Accounts\EmployeeLoan;
use App\Services\EmployeeService;
use Illuminate\Http\Request;

class EmployeeLoanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $records = EmployeeLoan::get();
        $params = [
            'pageTitle' => __('general.employee_loan'),
            'records' => $records,
        ];

        return view('dashboard.accounts.employee-loan.index', $params);
    }


    public function create()
    {
        $params = [
            'pageTitle' => __('general.new_employee_loan'),
        ];

        return view('dashboard.accounts.employee-loan.create', $params);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    function employeeLoanDetails(Request $request) {
        return EmployeeService::getEmployeeLoanDetails($request);
    }
}
