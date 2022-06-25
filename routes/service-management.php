<?php

use App\Http\Controllers\Dashboard\Definition\FlatTypeController;
use App\Http\Controllers\Dashboard\Definition\FloorNameController;
use App\Http\Controllers\Dashboard\Definition\FloorTypeController;
use App\Http\Controllers\Dashboard\Definition\ServiceController;
use Illuminate\Support\Facades\Route;

Route::resource('floor-name', FloorNameController::class, ['names' => 'floor-name']);
Route::resource('/floor-type', FloorTypeController::class, ['names' => 'floor-type']);
Route::resource('/flat-type', FlatTypeController::class, ['names' => 'flat-type']);
Route::resource('/service', ServiceController::class, ['names' => 'service']);
