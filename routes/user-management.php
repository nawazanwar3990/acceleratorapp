<?php
use App\Http\Controllers\UserManagement\CountryController;
use App\Http\Controllers\UserManagement\DistrictController;
use App\Http\Controllers\UserManagement\HrDepartmentController;
use App\Http\Controllers\UserManagement\HrDesignationController;
use App\Http\Controllers\UserManagement\HrOrganizationController;
use App\Http\Controllers\UserManagement\HrProfessionController;
use App\Http\Controllers\UserManagement\HumanResourceController;
use App\Http\Controllers\UserManagement\PermissionController;
use App\Http\Controllers\UserManagement\ProvinceController;
use App\Http\Controllers\UserManagement\RelationController;
use App\Http\Controllers\UserManagement\RoleController;
use App\Http\Controllers\UserManagement\RolePermissionController;
use App\Http\Controllers\UserManagement\RoleUserController;
use App\Http\Controllers\UserManagement\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class, ['names' => 'users']);
Route::resource('roles', RoleController::class, ['names' => 'roles']);
Route::resource('permissions', PermissionController::class, ['names' => 'permissions']);
Route::resource('role-users', RoleUserController::class, ['names' => 'role-users']);
Route::resource('role-permissions', RolePermissionController::class, ['names' => 'role-permissions']);

Route::get('/sync-permissions', [PermissionController::class, 'syncPermission'])
    ->name('sync-permissions.index');
Route::get('/sync-modules', [PermissionController::class, 'syncPermission'])
    ->name('sync-permissions.index');

Route::resource('/relation', RelationController::class, ['names' => 'relation']);
Route::resource('/country', CountryController::class, ['names' => 'country']);
Route::resource('/province', ProvinceController::class, ['names' => 'province']);
Route::resource('/district', DistrictController::class, ['names' => 'district']);
Route::resource('/hr-department', HrDepartmentController::class, ['names' => 'department']);
Route::resource('/hr-designation', HrDesignationController::class, ['names' => 'designation']);
Route::resource('/hr-profession', HrProfessionController::class, ['names' => 'profession']);
Route::resource('/hr-organization', HrOrganizationController::class, ['names' => 'organization']);

Route::resource('/human-resource', HumanResourceController::class, ['names' => 'human-resource']);
Route::post('/add-hr-ajax', [HumanResourceController::class, 'addHrAjax'])->name('add.hr-ajax');
