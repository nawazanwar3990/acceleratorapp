<?php
use App\Http\Controllers\Services\ServiceController;
use Illuminate\Support\Facades\Route;

Route::resource('/services', ServiceController::class, ['names' => 'services'])->middleware('has_package');
