<?php

namespace App\Services\RealEstate;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\EmployeeLoan;
use App\Models\HumanResource\Employee;
use App\Services\GeneralService;
use Illuminate\Support\Facades\Auth;

class EmployeeService
{
    public static function convertHrToEmployeeAccountHead($hrID) {
        $existingRecord = AccountHead::where('account_type', 'employee')->whereJsonContains('account_id', GeneralService::prepareForJson( [$hrID] ))
            ->first();
        if ($existingRecord) {
            return $existingRecord;
        }

        // Open as Payable
        return AccountHead::create([
            'HeadCode' => (new EmployeeService())->nextBrokerHeadCode(),
            'HeadName' => GeneralService::createAccountHeadName($hrID),
            'PHeadName' => 'Employee Ledger',
            'HeadLevel' => '3',
            'IsActive' => '1',
            'IsTransaction' => '1',
            'IsGL' => '0',
            'HeadType' => 'L',
            'IsBudget' => '0',
            'IsDepreciation' => '0',
            'DepreciationRate' => '0',
            'building_id' => BuildingService::getBuildingId(),
            'account_type' => 'employee',
            'account_id' => [$hrID],
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);
    }

    private function nextBrokerHeadCode(): String
    {
        $headCode = AccountHead::where('HeadLevel', 3)
            ->where('HeadCode', 'like',  '50204' . '%')
            ->max('HeadCode');
        if ($headCode != NULL) {
            return ($headCode + 1);
        }

        return "502040001";
    }

    public static function getSalaryTypesForDropDown($id = null) {
        $data = [
            1 => __('general.daily_wage'),
            2 => __('general.monthly_salary'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function getEmployeesForDropdown($type = 'daily') {
        $data = Employee::with('Hr');
        if ($type == 'daily') {
            $data = $data->where('salary_type', '1');
        }
        return $data->get()->sortBy('Hr.full_name')->pluck('Hr.full_name','id');
    }

    public static function loanReturnTypes($id=null)
    {
        $data = [
            1 => __('general.complete_one_time'),
            2 => __('general.deduction_from_salary'),
        ];
        if (!empty($id)){
            $data = $data[$id];
        }
        return $data;
    }

    public static function loanStatus($id=null)
    {
        $data = [
            1 => __('general.pending'),
            2 => __('general.approved'),
            3 => __('general.rejected'),
        ];
        if (!empty($id)){
            $data = $data[$id];
        }
        return $data;
    }

    public static function getEmployeeSalary($request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $employeeID = $request->get('employeeID');
            $record = Employee::findOrFail($employeeID);

            $data = [
                'salary' => $record->salary,
                'salaryFormatted' => GeneralService::number_format( $record->salary ),
                'model' => $record,
            ];
            $output = ['success' => true, 'msg' => '', 'data' => $data,];
        }
        return $output;
    }

    public static function getDepartmentEmployeesForJS($request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $departmentID = $request->get('departmentID');
            $records = Employee::where('department_id', $departmentID)
                ->where('salary_type', 2)->with('Hr')->get()->sortBy('Hr.full_name')->pluck('Hr.full_name', 'id');
            $data = '<option value>' . __('general.ph_employee') . '</option>';
            if ($records) {
                foreach ($records as $key => $value) {
                    $data .= '<option value="' . $key . '">' . $value . '</option>';
                }
            }
            $output = ['success' => true, 'msg' => '', 'data' => $data];
        }

        return $output;
    }

    public static function getEmployeeLoanDetails($request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $employeeID = $request->get('employeeID');
            $employee = Employee::findorFail($employeeID);

            if ($employee) {
                $loan = EmployeeLoan::where('employee_id', $employee->id)->whereIn('status', [1,2,4])->get();
                if ($loan->count() > 0) {
                    $output['msg'] = __('general.already_enrolled_in_loan');
                } else {
                    if ($employee->loan_percentage > 0) {
                        $empSalary = $employee->salary;
                        $loanPercentage = $employee->loan_percentage;

                        $applicableLoan = (($empSalary * $loanPercentage) / 100);
                        $output = ['success' => true, 'msg' => '', 'loanAmount' => $applicableLoan,
                            'loanAmountFormatted' =>  GeneralService::number_format($applicableLoan), 'salary' => $empSalary];
                    } else {
                        $output['msg'] = __('general.employee_loan_percentage_not_set');
                    }
                }
            }
        }

        return $output;
    }
}
