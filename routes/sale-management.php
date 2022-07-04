<?php

use App\Http\Controllers\PlanManagement\PlanController;
use App\Http\Controllers\PlanManagement\InstallmentTermController;
use App\Http\Controllers\SaleManagement\InstallmentController;
use App\Http\Controllers\SaleManagement\SaleController;
use Illuminate\Support\Facades\Route;

Route::resource('/sales', SaleController::class, ['names' => 'sales']);
Route::resource('/installments', InstallmentController ::class, ['names' => 'installments']);
