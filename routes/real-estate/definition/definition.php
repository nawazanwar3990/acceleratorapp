<?php


use App\Http\Controllers\Dashboard\Definition\ColonyController;
use App\Http\Controllers\Dashboard\Definition\CommodityTypeController;
use App\Http\Controllers\Dashboard\Definition\CountryController;
use App\Http\Controllers\Dashboard\Definition\DistrictController;
use App\Http\Controllers\Dashboard\Definition\FlatTypeController;
use App\Http\Controllers\Dashboard\Definition\FloorNameController;
use App\Http\Controllers\Dashboard\Definition\FloorTypeController;
use App\Http\Controllers\Dashboard\Definition\HrBusinessController;
use App\Http\Controllers\Dashboard\Definition\HrCastController;
use App\Http\Controllers\Dashboard\Definition\HrDepartmentController;
use App\Http\Controllers\Dashboard\Definition\HrDesignationController;
use App\Http\Controllers\Dashboard\Definition\HrEmployeeTypeController;
use App\Http\Controllers\Dashboard\Definition\HrMinistryController;
use App\Http\Controllers\Dashboard\Definition\HrNationalityController;
use App\Http\Controllers\Dashboard\Definition\HrOrganizationController;
use App\Http\Controllers\Dashboard\Definition\HrProfessionController;
use App\Http\Controllers\Dashboard\Definition\HrTaxStatusController;
use App\Http\Controllers\Dashboard\Definition\HrTaxTypeController;
use App\Http\Controllers\Dashboard\Definition\ProvinceController;
use App\Http\Controllers\Dashboard\Definition\RelationController;
use App\Http\Controllers\Dashboard\Definition\ServiceController;
use App\Http\Controllers\Dashboard\Definition\TehsilController;
use App\Http\Controllers\Devices\DeviceClassController;
use App\Http\Controllers\Devices\DeviceLocationController;
use App\Http\Controllers\Devices\DeviceMakeController;
use App\Http\Controllers\Devices\DeviceModelController;
use App\Http\Controllers\Devices\DeviceOperatingSystemController;
use App\Http\Controllers\Devices\DeviceTypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Temporary Route, will be removed when nav is set
Route::resource('floor-name', FloorNameController::class, ['names' => 'floor-name']);
Route::resource('/floor-type', FloorTypeController::class, ['names' => 'floor-type']);
Route::resource('/flat-type', FlatTypeController::class, ['names' => 'flat-type']);
Route::resource('/service', ServiceController::class, ['names' => 'service']);
Route::resource('/relation', RelationController::class, ['names' => 'relation']);
Route::resource('/hr-cast', HrCastController::class, ['names' => 'cast']);
Route::resource('/hr-nationality', HrNationalityController::class, ['names' => 'nationality']);
Route::resource('/country', CountryController::class, ['names' => 'country']);
Route::resource('/province', ProvinceController::class, ['names' => 'province']);
Route::resource('/district', DistrictController::class, ['names' => 'district']);
Route::resource('/tehsil', TehsilController::class, ['names' => 'tehsil']);
Route::resource('/colony', ColonyController::class, ['names' => 'colony']);
Route::resource('/hr-department', HrDepartmentController::class, ['names' => 'department']);
Route::resource('/hr-designation', HrDesignationController::class, ['names' => 'designation']);
Route::resource('/hr-ministry', HrMinistryController::class, ['names' => 'ministry']);
Route::resource('/hr-employment-type', HrEmployeeTypeController::class, ['names' => 'employee-type']);
Route::resource('/hr-profession', HrProfessionController::class, ['names' => 'profession']);
Route::resource('/hr-organization', HrOrganizationController::class, ['names' => 'organization']);
Route::resource('/hr-tax-type', HrTaxTypeController::class, ['names' => 'tax-type']);
Route::resource('/hr-tax-status', HrTaxStatusController::class, ['names' => 'tax-status']);
Route::resource('/hr-business', HrBusinessController::class, ['names' => 'hr-business']);
Route::resource('/commodity-type', CommodityTypeController::class, ['names' => 'commodity-type']);

//Device Definitions

Route::resource('device-types', DeviceTypeController::class, ['names' => 'device-types']);
Route::resource('device-makes', DeviceMakeController::class, ['names' => 'device-makes']);
Route::resource('device-models', DeviceModelController::class, ['names' => 'device-models']);
Route::resource('device-classes', DeviceClassController::class, ['names' => 'device-classes']);
Route::resource('device-locations', DeviceLocationController::class, ['names' => 'device-locations']);
Route::resource('device-operating-systems', DeviceOperatingSystemController::class, ['names' => 'device-operating-systems']);
