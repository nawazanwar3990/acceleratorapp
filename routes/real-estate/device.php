<?php

use App\Http\Controllers\Devices\DeviceController;
use Illuminate\Support\Facades\Route;

Route::resource('/devices', DeviceController::class, ['names' => 'devices']);
