<?php

use App\Http\Controllers\FreelancerPortal\FreelancerController;
use Illuminate\Support\Facades\Route;

Route::resource('/freelancers', FreelancerController::class, ['names' => 'freelancers']);
