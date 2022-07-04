<?php

use App\Http\Controllers\PlanManagement\PlanController;
use App\Http\Controllers\PlanManagement\InstallmentTermController;
use Illuminate\Support\Facades\Route;

Route::resource('/installment-terms', InstallmentTermController::class, ['names' => 'installment-terms']);
Route::resource('/plans', PlanController::class, ['names' => 'plans']);
