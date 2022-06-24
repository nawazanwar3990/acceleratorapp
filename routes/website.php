<?php

use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\PageController;
use App\Http\Controllers\Website\PlanController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])
->name('index');
Route::resource('plans', PlanController::class, ['names' => 'plans']);
//Custom Pages
Route::get('/verify-user-email-success', [PageController::class, 'verifyUserEmailSuccess'])
->name('verify-user-email-success');
