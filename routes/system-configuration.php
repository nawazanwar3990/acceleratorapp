<?php

use App\Http\Controllers\SystemConfiguration\SettingsController;
use Illuminate\Support\Facades\Route;

Route::resource('/system-settings', SettingsController::class, ['names' => 'system-settings']);
