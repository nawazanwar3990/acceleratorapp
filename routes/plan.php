<?php

use App\Http\Controllers\Dashboard\PlanController;
use App\Http\Controllers\Plans\InstallmentTermController;
use Illuminate\Support\Facades\Route;

Route::resource('/installment-terms', InstallmentTermController::class, ['names' => 'installment-terms'])->middleware('has_package');
Route::resource('/plans', PlanController::class, ['names' => 'plans'])->middleware('has_package');
