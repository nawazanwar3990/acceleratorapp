<?php

use App\Http\Controllers\SystemConfiguration\SettingController;
use Illuminate\Support\Facades\Route;

Route::resource('/settings', SettingController::class, ['names' => 'settings']);
