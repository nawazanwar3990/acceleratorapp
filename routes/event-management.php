<?php

use App\Http\Controllers\EventManagement\EventController;
use Illuminate\Support\Facades\Route;

Route::resource('/events', EventController::class, ['names' => 'events']);
