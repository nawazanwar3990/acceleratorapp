<?php

use App\Http\Controllers\Dashboard\Plans\PlanController;
use App\Http\Controllers\Plan\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::resource('/subscriptions', SubscriptionController::class, ['names' => 'subscriptions']);
Route::resource('/plans', PlanController::class, ['names' => 'plans']);
