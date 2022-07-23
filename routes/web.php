<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Website\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('package/expire', [PageController::class, 'expire'])
    ->name('package.expire');

Route::group(['prefix' => '/', 'as' => 'website.'], function () {
    require __DIR__ . '/website.php';
});
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::get('/home', [DashboardController::class, 'index'])
        ->name('index')
        ->middleware('has_package');
    require __DIR__ . '/service.php';
    require __DIR__ . '/user.php';
    require __DIR__ . '/system.php';
    require __DIR__ . '/plan.php';
    require __DIR__ . '/event.php';
    require __DIR__ . '/working-space.php';
    require __DIR__ . '/subscription.php';
});
require __DIR__ . '/auth.php';
