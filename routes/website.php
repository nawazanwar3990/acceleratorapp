<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Website\PlanController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])
->name('index');
Route::resource('plans', PlanController::class, ['names' => 'plans']);
//Custom Pages
Route::get('/verify-user-email-success', [PageController::class, 'verifyUserEmailSuccess'])
->name('verify-user-email-success');


Route::get('/co-working-spaces', [HomeController::class, 'getCoWorkingSpaces'])
    ->name('co-working-spaces.index');
Route::get('/freelancers', [HomeController::class, 'getFreelancers'])
    ->name('freelancers.index');
Route::get('/investors', [HomeController::class, 'getInvestors'])
    ->name('investors.index');
