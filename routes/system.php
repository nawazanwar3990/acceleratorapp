<?php

use App\Http\Controllers\Dashboard\SettingController;
use Illuminate\Support\Facades\Route;

Route::resource('/settings', SettingController::class, ['names' => 'settings'])->middleware('has_package');
