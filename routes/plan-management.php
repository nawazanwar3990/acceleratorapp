<?php

use App\Http\Controllers\Dashboard\Plans\PlanController;
use App\Http\Controllers\PlanManagement\InstallmentTermController;
use Illuminate\Support\Facades\Route;

Route::resource('/plans', PlanController::class, ['names' => 'plans']);
Route::resource('/installment-term', InstallmentTermController::class, ['names' => 'installment-term']);
