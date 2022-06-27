<?php

use App\Http\Controllers\Dashboard\BuildingUnits\BuildingsController;
use App\Http\Controllers\Dashboard\BuildingUnits\FlatController;
use App\Http\Controllers\Dashboard\BuildingUnits\FloorController;
use App\Http\Controllers\Dashboard\Definition\ColonyController;
use App\Http\Controllers\Dashboard\Definition\CommodityTypeController;
use App\Http\Controllers\Dashboard\Definition\TehsilController;
use App\Http\Controllers\Dashboard\GeneralController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\Sales\SalesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlanManagement\PlanController;
use App\Http\Controllers\UserManagement\CountryController;
use App\Http\Controllers\UserManagement\DistrictController;
use App\Http\Controllers\UserManagement\HumanResourceController;
use App\Http\Controllers\UserManagement\ProvinceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::group(['prefix' => '/', 'as' => 'website.'], function () {
    require __DIR__ . '/website.php';
});
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('index');
    require __DIR__ . '/service-management.php';
    require __DIR__ . '/user-management.php';
    require __DIR__ . '/system-configuration.php';
    require __DIR__ . '/plan-management.php';
    require __DIR__ . '/event-management.php';
    require __DIR__ . '/working-space.php';
});
require __DIR__ . '/auth.php';
