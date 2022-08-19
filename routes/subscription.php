<?php

use App\Http\Controllers\Dashboard\DurationController;
use App\Http\Controllers\Dashboard\ModuleController;
use App\Http\Controllers\Dashboard\PackageController;
use App\Http\Controllers\Dashboard\PaymentReceiptController;
use App\Http\Controllers\Dashboard\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::resource('/durations', DurationController::class, ['names' => 'durations'])->middleware('has_package');
Route::resource('/modules', ModuleController::class, ['names' => 'modules'])->middleware('has_package');
Route::resource('/packages', PackageController::class, ['names' => 'packages'])->middleware('has_package');
Route::resource('/subscriptions', SubscriptionController::class, ['names' => 'subscriptions'])->middleware('has_package');

Route::get('/payment-receipts', [PaymentReceiptController::class, 'index'])
    ->name('payment-receipts.index')
    ->middleware('has_package');
