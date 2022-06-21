<?php

use App\Http\Controllers\RealEstate\FixedAssets\AssetsInventoryController;
use App\Http\Controllers\RealEstate\FixedAssets\AssetsLocationController;
use App\Http\Controllers\RealEstate\FixedAssets\AssetsUnitController;
use Illuminate\Support\Facades\Route;

Route::resource('/assets-inventory', AssetsInventoryController::class, ['names' => 'assets-inventory']);
Route::resource('/assets-unit', AssetsUnitController::class, ['names' => 'assets-unit']);
Route::resource('/assets-location', AssetsLocationController::class, ['names' => 'assets-location']);
