<?php

use App\Http\Controllers\SystemConfiguration\SettingsController;
use Illuminate\Support\Facades\Route;

Route::resource('/settings', SettingsController::class, ['names' => 'settings']);
