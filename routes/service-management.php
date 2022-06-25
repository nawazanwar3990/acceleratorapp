<?php

use App\Http\Controllers\FlatManagement\FlatController;
use App\Http\Controllers\FlatManagement\FlatTypeController;
use App\Http\Controllers\FlatManagement\FloorController;
use App\Http\Controllers\FlatManagement\FloorTypeController;
use Illuminate\Support\Facades\Route;

Route::resource('/floors', FloorController::class, ['names' => 'floors']);
Route::resource('/floor-type', FloorTypeController::class, ['names' => 'floor-type']);
Route::resource('/flat-type', FlatTypeController::class, ['names' => 'flat-type']);
Route::resource('/flats', FlatController::class, ['names' => 'service']);
