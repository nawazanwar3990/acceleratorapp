<?php

use App\Http\Controllers\WorkingSpace\BuildingController;
use App\Http\Controllers\WorkingSpace\FlatController;
use App\Http\Controllers\WorkingSpace\FlatTypeController;
use App\Http\Controllers\WorkingSpace\FloorController;
use App\Http\Controllers\WorkingSpace\FloorTypeController;
use Illuminate\Support\Facades\Route;

Route::resource('/buildings', BuildingController::class, ['names' => 'buildings']);
Route::resource('/shops', FloorController::class, ['names' => 'shops']);
Route::resource('/rooms', FloorController::class, ['names' => 'rooms']);

Route::resource('/floors', FloorController::class, ['names' => 'floors']);
Route::resource('/floor-types', FloorTypeController::class, ['names' => 'floor-types']);
Route::resource('/flat-types', FlatTypeController::class, ['names' => 'flat-types']);
Route::resource('/flats', FlatController::class, ['names' => 'flats']);
