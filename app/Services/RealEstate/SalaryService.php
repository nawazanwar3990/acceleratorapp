<?php

namespace App\Services\RealEstate;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\Salary;
use App\Models\Accounts\Transaction;
use App\Models\HumanResource\Employee;
use App\Services\GeneralService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SalaryService
{
    public static function salaryPay($request) {
        DB::beginTransaction();
        try {
            $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
            $salary = Salary::whereBuildingId(BuildingService::getBuildingId())->findorFail($request->salary_id);
            $salaryMonth = Carbon::parse($salary->salary_month)->format('F-Y');

            $employee = Employee::whereBuildingId(BuildingService::getBuildingId())->findOrFail($salary->employee_id);
            $employeeAccountHead = AccountHead::whereBuildingId(BuildingService::getBuildingId())
                ->where('account_type', 'employee')->whereJsonContains('account_id', GeneralService::prepareForJson([$employee->Hr->id]))
                ->first();

            $salary->status = "Paid";
            $salary->received_by = $request->received_by;
            $salary->paid_by = Auth::user()->id;
            $salary->paid_at = Carbon::now();
            $salary->save();

            //Salary Amount Debit in Employee Head
            $salary->transactions()->save(
                new Transaction([
                    'vType' => 'Salary',
                    'vDate' => Carbon::now(),
                    'COAID' => $employeeAccountHead->HeadCode,
                    'Narration' => 'Debit for ' . ($salary->type == 2 ? 'Advance ' : '') . 'Salary of ' . $salaryMonth,
                    'Debit' => $salary->paid_salary,
                    'Credit' => 0,
                    'is_posted' => 1,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'is_approve' => 1,
                    'building_id' => BuildingService::getBuildingId(),
                ])
            );

            //Salary Amount Credit in Cash in Hand
            $salary->transactions()->save(
                new Transaction([
                    'vType' => 'Salary',
                    'vDate' => Carbon::now(),
                    'COAID' => '1020101',
                    'Narration' => 'Credit for Employee ' . $employee->Hr->full_name . ($salary->type == 2 ? 'Advance ' : '') . 'Salary of ' . $salaryMonth,
                    'Debit' => 0,
                    'Credit' => $salary->paid_salary,
                    'is_posted' => 1,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'is_approve' => 1,
                    'building_id' => BuildingService::getBuildingId(),
                ])
            );
            //Salary Amount Debit in Employee Salary Main Head 403
            $salary->transactions()->save(
                new Transaction([
                    'vType' => 'Salary',
                    'vDate' => Carbon::now(),
                    'COAID' => '403',
                    'Narration' => 'Employee ' . $employee->Hr->full_name . ' Debit Against ' . ($salary->type === 2 ? 'Advance ' : '') . 'Salary of ' . $salaryMonth,
                    'Debit' => $salary->paid_salary,
                    'Credit' => 0,
                    'is_posted' => 1,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'is_approve' => 1,
                    'building_id' => BuildingService::getBuildingId(),
                ])
            );

            //Deduction Amount Credit in Employee Head
            if (!empty($salary->deduction)) {
                if ($salary->deduction_type == 1) {
                    //Loan Deduction Credit in Employee Head
                    $salary->transactions()->save(
                        new Transaction([
                            'vType' => 'Loan',
                            'vDate' => Carbon::now(),
                            'COAID' => $employeeAccountHead->HeadCode,
                            'Narration' => 'Employee ' . $employee->Hr->full_name . ' Credit Against Loan Deduction of ' . $salaryMonth,
                            'Debit' => 0,
                            'Credit' => $salary->deduction,
                            'is_posted' => 1,
                            'created_by' => Auth::user()->id,
                            'updated_by' => Auth::user()->id,
                            'is_approve' => 1,
                            'building_id' => BuildingService::getBuildingId(),
                        ])
                    );
                }
            }

            DB::commit();
            $output['success'] = true;
            return $output;

        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
        }
    }

    public static function calculateEmployeeAdvanceSalary($employeeID, $salaryMonth) {

        $employee = Employee::whereBuildingId(BuildingService::getBuildingId())->findorFail($employeeID);
        $employeeSalary = $employee->salary;
        $loanAmount = 0;
        $checkMonth = Carbon::parse($salaryMonth)->format('Y-m');

        $advanceSalary = Salary::whereBuildingId(BuildingService::getBuildingId())
            ->where('employee_id', $employee->id)->where('type', 2)
            ->where('salary_month', $checkMonth)
            ->selectRaw('SUM(paid_salary) advance')
            ->first();

        $salary = Salary::whereBuildingId(BuildingService::getBuildingId())
            ->where('employee_id', $employee->id)->where('type', 1)
            ->where('salary_month', $checkMonth)
            ->selectRaw('SUM(paid_salary) salary')
            ->first();

//        $loanRecords = \AccountHelper::employeeLoanRecords($employee->id, Carbon::parse($month)->month, Carbon::parse($month)->year);
//        if ($loanRecords['hasLoan']) {
//            if (!empty($loanRecords['monthRemain'])) {
//                if (($loanRecords['loanRemain'] - $loanRecords['monthRemain']) < 0) { //deduct whole remain amount
//                    $loanAmount = $loanRecords['loanRemain'];
//                } else {
//                    $loanAmount = $loanRecords['monthRemain'];
//                }
//            } else {
//                if (($loanRecords['loanRemain'] - $loanRecords['deductAmount']) < 0) { //deduct whole remain amount
//                    $loanAmount = $loanRecords['loanRemain'];
//                } else {
//                    $loanAmount = $loanRecords['deductAmount'];
//                }
//            }
//        }

        if (empty($salary->salary)) {
            if (empty($advanceSalary->advance)) {
                $remainingSalary = $employeeSalary;
            } else {
                $remainingSalary = ($employeeSalary - $advanceSalary->advance);
            }
        } else {
            if (empty($advanceSalary->advance)) {
                $remainingSalary = $employeeSalary;
            } else {
                $remainingSalary = ($salary->salary  - $advanceSalary->advance);
            }
        }

        return [
            'basic' => $employeeSalary,
            'advance' => is_null($advanceSalary->advance) ? '0.00' : $advanceSalary->advance,
            'remainingSalary' => $remainingSalary,
            'loan' => $loanAmount
        ];
    }
}
