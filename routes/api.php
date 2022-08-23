<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/building/floor', [ApiController::class, 'getBuildingFloors'])
    ->name('api.building.floors');

Route::get('/user-info-cols-by/{id}/{type}', [ApiController::class, 'getUserInfoColsByIdType'])
    ->name('api.user_info_cols_by_id_type');
