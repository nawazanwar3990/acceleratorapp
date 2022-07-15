<?php

use App\Http\Controllers\Subscriptions\DurationController;
use App\Http\Controllers\Subscriptions\ModuleController;
use App\Http\Controllers\Subscriptions\PackageController;
use App\Http\Controllers\Subscriptions\PaymentController;
use App\Http\Controllers\Subscriptions\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::resource('/durations', DurationController::class, ['names' => 'durations'])->middleware('has_package');
Route::resource('/modules', ModuleController::class, ['names' => 'modules'])->middleware('has_package');
Route::resource('/packages', PackageController::class, ['names' => 'packages'])->middleware('has_package');
Route::resource('/subscriptions', SubscriptionController::class, ['names' => 'subscriptions'])->middleware('has_package');

Route::resource('/payments', PaymentController::class, ['names' => 'payments'])->middleware('has_package');
Route::get('/subscription/logs', [SubscriptionController::class, 'logs'])->name('subscription-logs.index')->middleware('has_package');
