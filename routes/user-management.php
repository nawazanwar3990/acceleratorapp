<?php

use App\Http\Controllers\UserManagement\BAController;
use App\Http\Controllers\UserManagement\CustomerController;
use App\Http\Controllers\UserManagement\FreelancerController;
use App\Http\Controllers\UserManagement\InvestorController;
use App\Http\Controllers\UserManagement\PermissionController;
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

Route::resource('/freelancers', FreelancerController::class, ['names' => 'freelancers'])->middleware('has_package');
Route::resource('/ba', BAController::class, ['names' => 'ba'])->middleware('has_package');
Route::resource('/investors', InvestorController::class, ['names' => 'investors'])->middleware('has_package');
Route::resource('/customer', CustomerController::class, ['names' => 'customers'])->middleware('has_package');

Route::post('/add-hr-ajax', [BAController::class, 'addHrAjax'])->name('add.hr-ajax')->middleware('has_package');
