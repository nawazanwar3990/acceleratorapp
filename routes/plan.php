<?php

use App\Http\Controllers\Dashboard\PlanController;
use Illuminate\Support\Facades\Route;
Route::resource('/plans', PlanController::class, ['names' => 'plans'])->middleware('has_package');
