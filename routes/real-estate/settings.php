<?php

use App\Http\Controllers\RealEstate\BusinessController;
use App\Http\Controllers\RealEstate\Settings\SettingsController;
use Illuminate\Support\Facades\Route;

Route::resource('/system-settings', SettingsController::class, ['names' => 'system-settings']);
Route::resource('/business-settings', BusinessController::class, ['names' => 'business-settings']);

Route::post('savePrintTheme',[SettingsController::class,'savePrintTheme'])->name('save.print.theme');
