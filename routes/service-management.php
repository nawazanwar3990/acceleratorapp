<?php

use App\Http\Controllers\FlatManagement\FlatTypeController;
use App\Http\Controllers\FlatManagement\FloorNameController;
use App\Http\Controllers\FlatManagement\FloorTypeController;
use App\Http\Controllers\ServiceManagement\ServiceController;
use Illuminate\Support\Facades\Route;

Route::resource('floor-name', FloorNameController::class, ['names' => 'floor-name']);
Route::resource('/floor-type', FloorTypeController::class, ['names' => 'floor-type']);
Route::resource('/flat-type', FlatTypeController::class, ['names' => 'flat-type']);
Route::resource('/service', ServiceController::class, ['names' => 'service']);
