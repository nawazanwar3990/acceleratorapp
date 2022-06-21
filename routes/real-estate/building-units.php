<?php

use App\Http\Controllers\RealEstate\BuildingUnits\BuildingsController;
use App\Http\Controllers\RealEstate\BuildingUnits\FlatController;
use App\Http\Controllers\RealEstate\BuildingUnits\FloorController;
use Illuminate\Support\Facades\Route;

Route::resource('/buildings', BuildingsController::class, ['names' => 'buildings']);
Route::resource('/floors', FloorController::class, ['names' => 'floors']);
Route::resource('/flats-shops', FlatController::class, ['names' => 'flats-shops']);
