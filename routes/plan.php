<?php

use App\Http\Controllers\Dashboard\Plans\PlanController;
use Illuminate\Support\Facades\Route;
Route::resource('/plans', PlanController::class, ['names' => 'plans']);
