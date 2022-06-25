<?php

namespace App\Http\Requests\Accounts;

use App\Models\Accounts\Salary;
use App\Models\HumanResource\Employee;
use App\Services\Accounts\VoucherService;
use App\Services\GeneralService;
use App\Services\RealEstate\BuildingService;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SalaryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if ($this->input('autoSalary') == false) {
            return [
                'employee_id' => 'required',
                'total_salary' => 'required',
                'paid_salary' => 'required',
            ];
        } else {
            return [];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->has('autoSalary') && $this->input('autoSalary') == false) {
            $this->merge([
                'attendance' => 1,
                'present' => 1,
                'deduction_type' => 3,
                'type' => 3, //Daily Wage
                'status' => 'Pending',
                'generated_by' => Auth::user()->id,
            ]);
        }

        if ($this->has('salaryType') && $this->input('salaryType') == 'advance') {
            if ($this->input('deduction') > 0) {
                $this->merge([
                    'deduction_type' => 1, //Loan
                    'deduction_reason' => 'Loan Deduction',
                ]);
            }
            $this->merge([
                'type' => 2, //Advance Salary
                'status' => 'Pending',
                'generated_by' => Auth::user()->id,
                'paid_salary' => $this->input('advance'),
            ]);
        }
    }

    public function createData() {

        if ($this->input('autoSalary') == false) {
            $model = Salary::create($this->all());
            VoucherService::updateNumber('Salary');
            return $model;
        } else {
            $finalOutput = ['success' => true, 'month' => $this->input('salary_month')];
            $currentPaid = [];
            $alreadyPaid = [];

            $deduction = 0;
            $deduction_type = null;
            $deductionReason = null;
            $advanceSalary = 0;

            $salaryMonth = Carbon::parse($this->input('salary_month'))->format('Y-m');

            $employees = Employee::where('salary_type', 2)
                ->when(($this->input('department_id') > 0), function ($query) {
                    $query->where('department_id', $this->input('department_id'));
                })->orderBy('id')->get();
            if (count($employees) > 0) {
                foreach ($employees as $employee) {
                    $salaryPaidRecord = Salary::whereBuildingId(BuildingService::getBuildingId())
                        ->where('employee_id', $employee->id)->where('salary_month', $salaryMonth)->where('type', 1)->first();
                    $employeeName = $employee->Hr->full_name;
                    $employeeSalary = $employee->salary;

                    if (empty($salaryPaidRecord)) { //salary not paid yet

                        //Loan Calculation
//                        $loanRecords = \AccountHelper::employeeLoanRecords($employee->id, Carbon::parse($request->salary_month)->month, Carbon::parse($request->salary_month)->year);
//                        if ($loanRecords['hasLoan'] === true) {
//
//                            $deductionReason = 'Loan Deduction';
//                            $deduction_type = 1;
//                            if (!empty($loanRecords['monthRemain'])) {
//                                if (($loanRecords['loanRemain'] - $loanRecords['monthRemain']) < 0) { //deduct whole remain amount
//                                    $deduction = $loanRecords['loanRemain'];
//
//                                    $employeeLoan = EmployeeLoan::where('location_id', $this->location)
//                                        ->where('employee_id', $employee->id)->where('status', 4)->first();
//                                    if ($employeeLoan) {
//                                        $employeeLoan->status = 5;
//                                        $employeeLoan->save();
//                                    }
//
//                                } else { //deduct installment
//                                    $deduction = $loanRecords['monthRemain'];
//                                }
//                            } else {
//                                if (($loanRecords['loanRemain'] - $loanRecords['deductAmount']) < 0) { //deduct whole remain amount
//                                    $deduction = $loanRecords['loanRemain'];
//
//                                    $employeeLoan = EmployeeLoan::where('location_id', $this->location)
//                                        ->where('employee_id', $employee->id)->where('status', 4)->first();
//                                    if ($employeeLoan) {
//                                        $employeeLoan->status = 5;
//                                        $employeeLoan->save();
//                                    }
//                                } else {
//                                    $deduction = $loanRecords['deductAmount'];
//                                }
//                            }
//                        } else {
                            $deduction = 0;
                            $deductionReason = null;
                            $deduction_type = null;
//                        }

                        // Advance Salary Calculation
                        $salaryAdvanceRecord = Salary::where('employee_id', $employee->id)
                            ->where('salary_month', $salaryMonth)->where('type', 2)
                            ->selectRaw('SUM(paid_salary) as advanceSalary, created_at')->groupBy('created_at')->first();
                        if (!empty($salaryAdvanceRecord)) {
                            $advanceSalary = $salaryAdvanceRecord->advanceSalary;
                            $paidSalary = (($employeeSalary - $deduction) - $advanceSalary);
                        } else {
                            $paidSalary = ($employeeSalary - $deduction);
                        }

                        if ($paidSalary > 0) {
                            $currentPaid[] = ['employee' => $employeeName, 'generated_date' => GeneralService::formatDate(Carbon::today()->toDateString()) ];
                            Salary::create([
                                'salary_no' => VoucherService::getNextVoucherNo('Salary'),
                                'employee_id' => $employee->id,
                                'salary_month' => $salaryMonth,
                                'total_salary' => $employeeSalary,
                                'paid_salary' => $paidSalary,
                                'attendance' => 31,
                                'present' => 31,
                                'deduction' => $deduction,
                                'deduction_type' => $deduction_type,
                                'deduction_reason' => $deductionReason,
                                'generated_by' => Auth::user()->id,
                                'type' => 1, //Salary
                                'status' => 'Pending',
                                'building_id' => BuildingService::getBuildingId(),
                            ]);
                            VoucherService::updateNumber('Salary');
                        } else {
                            $alreadyPaid[] = ['employee' => $employeeName, 'generated_date' => GeneralService::formatDate($salaryAdvanceRecord->created_at) ];
                        }
                    } else {
                        $alreadyPaid[] = ['employee' => $employeeName, 'generated_date' => GeneralService::formatDate($salaryPaidRecord->created_at) ];
                    }
                }
            }
            $finalOutput['currentRecords'] = $currentPaid;
            $finalOutput['alreadyRecords'] = $alreadyPaid;

            return $finalOutput;
        }

    }

    public function saveAdvacnceSalary() {
        $model = Salary::create($this->all());
        VoucherService::updateNumber('Salary');
        return $model;
    }
}
