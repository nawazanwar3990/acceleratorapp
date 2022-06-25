<?php

use App\Http\Controllers\Dashboard\EventAndMeeting\EventController;
use Illuminate\Support\Facades\Route;

Route::resource('/events', EventController::class, ['names' => 'events']);
