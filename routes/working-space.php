<?php

use App\Http\Controllers\WorkingSpace\BuildingController;
use App\Http\Controllers\WorkingSpace\FlatController;
use App\Http\Controllers\WorkingSpace\FlatTypeController;
use App\Http\Controllers\WorkingSpace\FloorController;
use App\Http\Controllers\WorkingSpace\FloorTypeController;
use Illuminate\Support\Facades\Route;

Route::resource('/buildings', BuildingController::class, ['names' => 'buildings'])->middleware('has_package');
Route::resource('/floors', FloorController::class, ['names' => 'floors'])->middleware('has_package');
Route::resource('/floor-types', FloorTypeController::class, ['names' => 'floor-types'])->middleware('has_package');
Route::resource('/flat-types', FlatTypeController::class, ['names' => 'flat-types'])->middleware('has_package');
Route::resource('/flats', FlatController::class, ['names' => 'flats'])->middleware('has_package');
