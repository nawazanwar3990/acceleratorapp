<?php

use \App\Http\Controllers\RealEstate\Definition\ServiceController;

//Temporary Route, will be removed when nav is set
Route::resource('service', ServiceController::class);
//Route::resource('floorName', FloorNameController::class);
//Route::resource('/floorType', FloorTypeController::class,['names' => 'floor-type']);
//Route::resource('/service', ServiceController::class, ['names' => 'service']);

