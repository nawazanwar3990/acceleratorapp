<?php

use App\Http\Controllers\PlanManagement\InstallmentTermController;
use App\Http\Controllers\PlanManagement\PlanController;
use Illuminate\Support\Facades\Route;

Route::resource('/plans', PlanController::class, ['names' => 'plans']);
Route::resource('/installment-terms', InstallmentTermController::class, ['names' => 'installment-terms']);
Route::resource('/installments', InstallmentTermController::class, ['names' => 'installments']);
