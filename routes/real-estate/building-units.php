<?php

use App\Http\Controllers\Dashboard\BuildingUnits\BuildingsController;
use App\Http\Controllers\Dashboard\BuildingUnits\FlatController;
use App\Http\Controllers\Dashboard\BuildingUnits\FloorController;
use Illuminate\Support\Facades\Route;

Route::resource('/buildings', BuildingsController::class, ['names' => 'buildings']);
Route::resource('/floors', FloorController::class, ['names' => 'floors']);
Route::resource('/flats-shops', FlatController::class, ['names' => 'flats-shops']);
