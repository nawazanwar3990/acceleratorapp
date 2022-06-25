<?php

namespace App\Http\Controllers\Dashboard\HumanResource;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\HumanResource\EmployeeRequest;
use App\Models\HumanResource\Employee;
use App\Services\RealEstate\BuildingService;
use App\Services\RealEstate\EmployeeService;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $this->authorize('view', Employee::class);
        $records = Employee::orderBy('salary_type','ASC')
            ->get();
        $params = [
            'pageTitle' => __('general.employees'),
            'records' => $records,
        ];
        return view('dashboard.human-resource.employee.index', $params);
    }

    public function create()
    {
        $this->authorize('create', Employee::class);
        $params = [
            'pageTitle' => __('general.new_employee'),
        ];
        return view('dashboard.human-resource.employee.create', $params);
    }

    public function store(EmployeeRequest $request)
    {
        $this->authorize('create', Employee::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.employees.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.employees.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function show($id)
    {
        $this->authorize('view', Employee::class);
        //
    }

    public function edit($id)
    {
        $this->authorize('update', Employee::class);
        $model = Employee::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_employee'),
            'model' => $model,
        ];
        return view('dashboard.human-resource.employee.edit', $params);

    }

    public function update(EmployeeRequest $request, $id)
    {
        $this->authorize('update', Employee::class);
        if ($request->updateData()) {
            return redirect()->route('dashboard.employees.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(EmployeeRequest $request, $id)
    {
        $this->authorize('delete', Employee::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.employees.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getEmployeeSalary(Request $request) {
        return EmployeeService::getEmployeeSalary($request);
    }

    public function getDepartmentEmployees(Request $request) {
        return EmployeeService::getDepartmentEmployeesForJS($request);
    }


}
