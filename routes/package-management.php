<?php

use App\Http\Controllers\SubscriptionManagement\DurationController;
use App\Http\Controllers\SubscriptionManagement\ModuleController;
use App\Http\Controllers\SubscriptionManagement\PackageController;
use App\Http\Controllers\SubscriptionManagement\SubscriptionController;
use App\Http\Controllers\PaymentManagement\PaymentController;
use Illuminate\Support\Facades\Route;

Route::resource('/durations', DurationController::class, ['names' => 'durations'])->middleware('has_package');
Route::resource('/modules', ModuleController::class, ['names' => 'modules'])->middleware('has_package');
Route::resource('/packages', PackageController::class, ['names' => 'packages'])->middleware('has_package');
Route::resource('/subscriptions', SubscriptionController::class, ['names' => 'subscriptions'])->middleware('has_package');

Route::resource('/payments', PaymentController::class, ['names' => 'payments'])->middleware('has_package');
Route::post('/subscription/logs', [SubscriptionController::class, 'logs'])->name('subscription-logs.index')->middleware('has_package');
