<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WorkingSpace\BuildingController;
use App\Http\Controllers\WorkingSpace\FlatController;
use App\Http\Controllers\WorkingSpace\FloorController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])
    ->name('index');
//Custom Pages
Route::get('/verify-user-email-success', [PageController::class, 'verifyUserEmailSuccess'])
    ->name('verify-user-email-success');


Route::get('/co-working-spaces', [HomeController::class, 'getCoWorkingSpaces'])
    ->name('co-working-spaces.index');
Route::get('/freelancers', [HomeController::class, 'getFreelancers'])
    ->name('freelancers.index');
Route::get('/investors', [HomeController::class, 'getInvestors'])
    ->name('investors.index');


Route::get('/buildings', [BuildingController::class, 'getBuildings'])
    ->name('buildings.index');
Route::get('/floors', [FloorController::class, 'getFloors'])
    ->name('floors.index');
Route::get('/flats', [FlatController::class, 'getFlats'])
    ->name('flats.index');

Route::get('/pricing-plans/{type?}/{id?}', [BookingController::class, 'pricingPlans'])
    ->name('pricing-plans.index');
Route::get('/bookings/{type?}/{id?}/{plan?}', [BookingController::class, 'showBookingForm'])
    ->name('bookings.index');

Route::post('/booking/store', [BookingController::class, 'storeBooking'])
    ->name('booking.store');
