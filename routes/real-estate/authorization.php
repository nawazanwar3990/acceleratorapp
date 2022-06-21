<?php

use App\Http\Controllers\Authorization\PermissionController;
use App\Http\Controllers\Authorization\RoleController;
use App\Http\Controllers\Authorization\RolePermissionController;
use App\Http\Controllers\Authorization\RoleUserController;
use App\Http\Controllers\Authorization\SyncPermissionController;
use App\Http\Controllers\Authorization\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class, ['names' => 'users']);
Route::resource('roles', RoleController::class, ['names' => 'roles']);
Route::resource('permissions', PermissionController::class, ['names' => 'permissions']);
Route::resource('role-users', RoleUserController::class, ['names' => 'role-users']);
Route::resource('role-permissions', RolePermissionController::class, ['names' => 'role-permissions']);

Route::get('/sync-permissions', [PermissionController::class, 'syncPermission'])
    ->name('sync-permissions.index');
