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
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('index');
    Route::post('/change-building', [BuildingsController::class, 'changeBuilding'])->name('change-building');
    Route::get('/search-flat', [FlatController::class, 'searchFlat'])->name('search-flat');
    Route::post('get-provinces-of-country', [CountryController::class, 'getProvincesOfCountry'])->name('get.provinces-by-country');
    Route::post('get-districts-of-province', [ProvinceController::class, 'getDistrictsOfProvince'])->name('get.districts-by-province');
    Route::post('get-tehsils-of-district', [DistrictController::class, 'getTehsilsOfDistrict'])->name('get.tehsils-by-district');
    Route::post('get-colonies-by-tehsil', [TehsilController::class, 'getColoniesOfTehsil'])->name('get.colonies-by-tehsil');
    Route::post('get-address-by-colony', [ColonyController::class, 'getAddressOfColony'])->name('get.address-by-colony');
    Route::post('get-hr-details', [HumanResourceController::class, 'getHrDetails'])->name('get.hr-details');
    Route::post('get-hr-details-for-employee', [HumanResourceController::class, 'getHrDetailsForEmployee'])->name('get.hr-details-for-employee');
    Route::post('hr-picker', [HumanResourceController::class, 'HrPickerTable'])->name('hr-picker');
    Route::post('get-floors-of-building', [BuildingsController::class, 'getFloorsOfBuilding'])->name('get.floors-of-building');
    Route::post('get-flats-of-floor', [FloorController::class, 'getFlatsOfFloor'])->name('get.flats-of-floor');
    Route::post('get-floor-details', [FloorController::class, 'getFloorDetails'])->name('get.floor-details');
    Route::post('get-flat-details', [FlatController::class, 'getFlatDetails'])->name('get.flat-details');
    Route::post('get-flat-owners', [FlatController::class, 'getFlatOwners'])->name('get.flat-owners');
    Route::post('get-sales-payment-sub-types', [GeneralController::class, 'getPaymentSubTypes'])->name('get.sales-payment-sub-types');
    Route::post('get-commodity-sub-types', [CommodityTypeController::class, 'getCommoditySubTypes'])->name('get.commodity-sub-types');
    Route::post('dashboard-data-ajax', [HomeController::class, 'dashboardDataAjax'])->name('dashboard.data.ajax');
    Route::post('get-installment-plan-details', [PlanController::class, 'getInstallmentPlanDetails'])->name('get.installment-plan-details');
    Route::post('get-sales-payment-view', [SalesController::class, 'getPaymentTypeView'])->name('get.sales-payment-view');
    Route::post('get-sales-commodity-view', [SalesController::class, 'getCommodityTypeView'])->name('get.sales-commodity-view');
    Route::post('get-flat-revisions', [FlatController::class, 'getFlatRevisions'])->name('get.flat-revisions');
    Route::post('get-flat-object', [FlatController::class, 'getFlatObject'])->name('get.flat-object');
    Route::get('nav-search', [GeneralController::class, 'navSearch'])->name('nav-search');

    require __DIR__ . '/service-management.php';
    require __DIR__ . '/user-management.php';
    require __DIR__ . '/system-configuration.php';
    require __DIR__ . '/plan-management.php';
    require __DIR__ . '/event-management.php';
});
require __DIR__ . '/auth.php';
