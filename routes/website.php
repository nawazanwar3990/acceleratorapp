<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Website\BAController;
use App\Http\Controllers\Website\PageController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])
    ->name('index');
//Custom Pages
Route::get('/verify-user-email-success', [PageController::class, 'verifyUserEmailSuccess'])
    ->name('verify-user-email-success');

Route::get('/ba/create/{step}/{id?}', [BAController::class, 'create'])
    ->name('ba.create');
Route::post('/ba/create/{step}/{id?}', [BAController::class, 'store'])
    ->name('ba.store');
