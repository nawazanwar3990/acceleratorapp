<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionManagement\PackageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserManagement\FreelancerController;
use App\Http\Controllers\UserManagement\InvestorController;
use App\Http\Controllers\WorkingSpace\BuildingController;
use App\Http\Controllers\WorkingSpace\FloorController;
use App\Http\Controllers\WorkingSpace\OfficeController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])
    ->name('index');
//Custom Pages
Route::get('/verify-user-email-success', [PageController::class, 'verifyUserEmailSuccess'])
    ->name('verify-user-email-success');


Route::get('/co-working-spaces', [HomeController::class, 'getCoWorkingSpaces'])
    ->name('co-working-spaces.index');

Route::get('/freelancers', [FreelancerController::class, 'getFreelancers'])
    ->name('freelancers.index');
Route::get('/investors', [InvestorController::class, 'getInvestors'])
    ->name('investors.index');


Route::get('/buildings', [BuildingController::class, 'getBuildings'])
    ->name('buildings.index');
Route::get('/floors', [FloorController::class, 'getFloors'])
    ->name('floors.index');
Route::get('/offices', [OfficeController::class, 'getOffices'])
    ->name('offices.index');

Route::get('/pricing-plans/{type?}/{id?}', [BookingController::class, 'pricingPlans'])
    ->name('pricing-plans.index');
Route::get('/bookings/{type?}/{id?}/{plan?}', [BookingController::class, 'showBookingForm'])
    ->name('bookings.index');

Route::post('/booking/store', [BookingController::class, 'storeBooking'])
    ->name('booking.store');

Route::get('/package/renewal', [PackageController::class, 'sendRenewalRequest'])
    ->name('package.renewal');
