<?php

use App\Http\Controllers\Accounts\SalaryController;
use App\Http\Controllers\Dashboard\HumanResource\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::post('get-employee-salary', [EmployeeController::class, 'getEmployeeSalary'])->name('get.employee-salary');
Route::post('get-department-employees', [EmployeeController::class, 'getDepartmentEmployees'])->name('get.department-employees');

Route::post('salary-pay-now', [SalaryController::class, 'salaryPayNow'])->name('salary.pay-now');
Route::get('/salary/advance', [SalaryController::class, 'advanceSalary'])->name('salary.advance');
Route::post('/salary/save-advance', [SalaryController::class, 'saveAdvanceSalary'])->name('salary.save-advance');
Route::post('/salary/calculate-advance-salary', [SalaryController::class, 'calculateAdvanceSalary'])->name('salary.calculate-advance');
Route::resource('/salary', SalaryController::class, ['names' => 'salary']);
