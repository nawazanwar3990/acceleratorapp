<?php

use App\Http\Controllers\PackageManagement\DurationController;
use App\Http\Controllers\PackageManagement\ModuleController;
use App\Http\Controllers\PackageManagement\PackageController;
use Illuminate\Support\Facades\Route;

Route::resource('/durations', DurationController::class, ['names' => 'durations']);
Route::resource('/modules', ModuleController::class, ['names' => 'modules']);
Route::resource('/packages', PackageController::class, ['names' => 'packages']);
