<?php

use App\Http\Controllers\UserManagement\CountryController;
use App\Http\Controllers\UserManagement\CustomerController;
use App\Http\Controllers\UserManagement\DistrictController;
use App\Http\Controllers\UserManagement\HrDepartmentController;
use App\Http\Controllers\UserManagement\HrDesignationController;
use App\Http\Controllers\UserManagement\HrOrganizationController;
use App\Http\Controllers\UserManagement\HrProfessionController;
use App\Http\Controllers\UserManagement\AdminController;
use App\Http\Controllers\UserManagement\PermissionController;
use App\Http\Controllers\UserManagement\ProvinceController;
use App\Http\Controllers\UserManagement\RelationController;
use App\Http\Controllers\UserManagement\RoleController;
use App\Http\Controllers\UserManagement\RolePermissionController;
use App\Http\Controllers\UserManagement\RoleUserController;
use App\Http\Controllers\UserManagement\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class, ['names' => 'users'])->middleware('has_package');
Route::resource('roles', RoleController::class, ['names' => 'roles'])->middleware('has_package');
Route::resource('permissions', PermissionController::class, ['names' => 'permissions'])->middleware('has_package');
Route::resource('role-users', RoleUserController::class, ['names' => 'role-users'])->middleware('has_package');
Route::resource('role-permissions', RolePermissionController::class, ['names' => 'role-permissions'])->middleware('has_package');

Route::get('/sync-permissions', [PermissionController::class, 'syncPermission'])
    ->name('sync-permissions.index')
    ->middleware('has_package');
Route::get('/sync-modules', [PermissionController::class, 'syncPermission'])
    ->name('sync-permissions.index')
    ->middleware('has_package');

Route::resource('/relation', RelationController::class, ['names' => 'relation'])->middleware('has_package');
Route::resource('/country', CountryController::class, ['names' => 'country'])->middleware('has_package');
Route::resource('/province', ProvinceController::class, ['names' => 'province'])->middleware('has_package');
Route::resource('/district', DistrictController::class, ['names' => 'district'])->middleware('has_package');
Route::resource('/hr-department', HrDepartmentController::class, ['names' => 'department'])->middleware('has_package');
Route::resource('/hr-designation', HrDesignationController::class, ['names' => 'designation'])->middleware('has_package');
Route::resource('/hr-profession', HrProfessionController::class, ['names' => 'profession'])->middleware('has_package');
Route::resource('/hr-organization', HrOrganizationController::class, ['names' => 'organization'])->middleware('has_package');

Route::resource('/admins', AdminController::class, ['names' => 'admins'])->middleware('has_package');
Route::resource('/customer', CustomerController::class, ['names' => 'customers'])->middleware('has_package');

Route::post('/add-hr-ajax', [AdminController::class, 'addHrAjax'])->name('add.hr-ajax')->middleware('has_package');
