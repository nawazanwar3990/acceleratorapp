<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriptionManagement\PackageController;
use App\Http\Controllers\PageController;
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
    require __DIR__ . '/service-management.php';
    require __DIR__ . '/user-management.php';
    require __DIR__ . '/system-configuration.php';
    require __DIR__ . '/plan-management.php';
    require __DIR__ . '/event-management.php';
    require __DIR__ . '/working-space.php';
    require __DIR__ . '/package-management.php';
    require __DIR__ . '/sale-management.php';
});
require __DIR__ . '/auth.php';
