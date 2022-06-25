<?php

use App\Http\Controllers\PlanManagement\InstallmentTermController;
use App\Http\Controllers\PlanManagement\PlanController;
use Illuminate\Support\Facades\Route;

Route::resource('/plans', PlanController::class, ['names' => 'plans']);
Route::resource('/installment-term', InstallmentTermController::class, ['names' => 'installment-term']);
Route::resource('/installments', InstallmentTermController::class, ['names' => 'installments']);
