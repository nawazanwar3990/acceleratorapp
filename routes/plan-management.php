<?php

use App\Http\Controllers\PlanManagement\InstallmentPlanController;
use App\Http\Controllers\PlanManagement\InstallmentTermController;
use Illuminate\Support\Facades\Route;

Route::resource('/installment-terms', InstallmentTermController::class, ['names' => 'installment-terms']);
Route::resource('/installment-plans', InstallmentPlanController::class, ['names' => 'installment-plans']);
