<?php

use App\Http\Controllers\FlatManagement\FlatController;
use App\Http\Controllers\FlatManagement\FlatTypeController;
use App\Http\Controllers\FlatManagement\FloorController;
use App\Http\Controllers\FlatManagement\FloorTypeController;
use Illuminate\Support\Facades\Route;

Route::resource('/floors', FloorController::class, ['names' => 'floors']);
Route::resource('/floor-types', FloorTypeController::class, ['names' => 'floor-types']);
Route::resource('/flat-types', FlatTypeController::class, ['names' => 'flat-types']);
Route::resource('/flats', FlatController::class, ['names' => 'flats']);
