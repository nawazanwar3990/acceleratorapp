<?php

use App\Http\Controllers\Events\EventController;
use Illuminate\Support\Facades\Route;

Route::resource('/events', EventController::class, ['names' => 'events'])->middleware('has_package');