<?php

use App\Http\Controllers\PackageManagement\DurationController;
use App\Http\Controllers\PackageManagement\ModuleController;
use App\Http\Controllers\PackageManagement\PackageController;
use App\Http\Controllers\PackageManagement\SubscriptionController;
use App\Http\Controllers\PaymentManagement\PaymentController;
use Illuminate\Support\Facades\Route;

Route::resource('/durations', DurationController::class, ['names' => 'durations']);
Route::resource('/modules', ModuleController::class, ['names' => 'modules']);
Route::resource('/packages', PackageController::class, ['names' => 'packages']);
Route::resource('/subscriptions', SubscriptionController::class, ['names' => 'subscriptions']);

Route::resource('/payments', PaymentController::class, ['names' => 'payments']);
Route::post('/subscription/logs', [SubscriptionController::class, 'logs'])->name('subscription-logs.index');
