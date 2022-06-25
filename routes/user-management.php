<?php

use App\Http\Controllers\Authorization\PermissionController;
use App\Http\Controllers\Authorization\RoleController;
use App\Http\Controllers\Authorization\RolePermissionController;
use App\Http\Controllers\Authorization\RoleUserController;
use App\Http\Controllers\Authorization\UserController;
use App\Http\Controllers\Dashboard\Definition\CountryController;
use App\Http\Controllers\Dashboard\Definition\DistrictController;
use App\Http\Controllers\Dashboard\Definition\HrBusinessController;
use App\Http\Controllers\Dashboard\Definition\HrCastController;
use App\Http\Controllers\Dashboard\Definition\HrDepartmentController;
use App\Http\Controllers\Dashboard\Definition\HrDesignationController;
use App\Http\Controllers\Dashboard\Definition\HrMinistryController;
use App\Http\Controllers\Dashboard\Definition\HrNationalityController;
use App\Http\Controllers\Dashboard\Definition\HrOrganizationController;
use App\Http\Controllers\Dashboard\Definition\HrProfessionController;
use App\Http\Controllers\Dashboard\Definition\ProvinceController;
use App\Http\Controllers\Dashboard\Definition\RelationController;
use App\Http\Controllers\Dashboard\HumanResource\HumanResourceController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class, ['names' => 'users']);
Route::resource('roles', RoleController::class, ['names' => 'roles']);
Route::resource('permissions', PermissionController::class, ['names' => 'permissions']);
Route::resource('role-users', RoleUserController::class, ['names' => 'role-users']);
Route::resource('role-permissions', RolePermissionController::class, ['names' => 'role-permissions']);
Route::get('/sync-permissions', [PermissionController::class, 'syncPermission'])
    ->name('sync-permissions.index');

Route::resource('/relation', RelationController::class, ['names' => 'relation']);
Route::resource('/hr-cast', HrCastController::class, ['names' => 'cast']);
Route::resource('/hr-nationality', HrNationalityController::class, ['names' => 'nationality']);
Route::resource('/country', CountryController::class, ['names' => 'country']);
Route::resource('/province', ProvinceController::class, ['names' => 'province']);
Route::resource('/district', DistrictController::class, ['names' => 'district']);
Route::resource('/hr-department', HrDepartmentController::class, ['names' => 'department']);
Route::resource('/hr-designation', HrDesignationController::class, ['names' => 'designation']);
Route::resource('/hr-profession', HrProfessionController::class, ['names' => 'profession']);
Route::resource('/hr-organization', HrOrganizationController::class, ['names' => 'organization']);
Route::resource('/hr-business', HrBusinessController::class, ['names' => 'hr-business']);


Route::resource('/human-resource', HumanResourceController::class, ['names' => 'human-resource']);
Route::post('/add-hr-ajax', [HumanResourceController::class, 'addHrAjax'])->name('add.hr-ajax');
