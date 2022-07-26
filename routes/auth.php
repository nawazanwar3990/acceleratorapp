<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;

Route::get('/register/{type?}', [RegisterController::class, 'showRegistrationForm'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [LoginController::class, 'apply'])
    ->middleware('guest')
    ->name('login');

Route::get('email/resend', [VerificationController::class,'resend'])
    ->name('verification.resend');
Route::post('email/resend/post', [VerificationController::class,'postResend'])
    ->name('verification.resend.post');


Route::get('/user/verify/{token}', [RegisterController::class, 'verifyUser']);
