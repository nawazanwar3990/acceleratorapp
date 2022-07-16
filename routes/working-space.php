<?php

use App\Http\Controllers\WorkingSpace\BuildingController;
use App\Http\Controllers\WorkingSpace\OfficeController;
use App\Http\Controllers\WorkingSpace\OfficeTypeController;
use App\Http\Controllers\WorkingSpace\FloorController;
use App\Http\Controllers\WorkingSpace\FloorTypeController;
use Illuminate\Support\Facades\Route;

Route::resource('/buildings', BuildingController::class, ['names' => 'buildings'])->middleware('has_package');
Route::resource('/floors', FloorController::class, ['names' => 'floors'])->middleware('has_package');
Route::resource('/floor-types', FloorTypeController::class, ['names' => 'floor-types'])->middleware('has_package');
Route::resource('/office-types', OfficeTypeController::class, ['names' => 'office-types'])->middleware('has_package');
Route::resource('/offices', OfficeController::class, ['names' => 'offices'])->middleware('has_package');

Route::get('/office-plans/{office_id}', [OfficeController::class, 'listPlans'])
    ->name('office-plans.index')
    ->middleware('has_package');
Route::get('/store/office-plans', [OfficeController::class, 'storePlans'])
    ->name('office-plans.store')
    ->middleware('has_package');
