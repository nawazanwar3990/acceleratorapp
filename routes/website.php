<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentReceiptController;
use App\Http\Controllers\StartupController;
use App\Http\Controllers\StartupServiceController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Website\BAController;
use App\Http\Controllers\Website\CustomerController;
use App\Http\Controllers\Website\FreelancerController;
use App\Http\Controllers\Website\MentorController;
use App\Http\Controllers\Website\PageController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/', 'as' => 'website.'], function () {
    Route::get('', [HomeController::class, 'index'])
        ->name('index');

    Route::get('/verify-user-email-success', [PageController::class, 'verifyUserEmailSuccess'])
        ->name('verify-user-email-success');

    Route::get('/ba/create/{type?}/{payment?}/{step?}/{id?}', [BAController::class, 'create'])
        ->name('ba.create');
    Route::post('/ba/store/{type?}/{payment?}/{step?}/{id?}', [BAController::class, 'store'])
        ->name('ba.store');

    Route::get('/freelancers/create/{type?}/{payment?}/{step?}/{id?}', [FreelancerController::class, 'create'])
        ->name('freelancers.create');
    Route::post('/freelancers/store/{type?}/{payment?}/{step?}/{id?}', [FreelancerController::class, 'store'])
        ->name('freelancers.store');

    Route::get('/pending-subscription/{id}/{type}', [SubscriptionController::class, 'viewPendingSubscription'])
        ->name('pending-subscription')
        ->middleware('has_package');
    Route::post('/payment-receipts/store', [PaymentReceiptController::class, 'storePaymentReceipt'])
        ->name('payment-receipts.store');


    Route::get('/customers/create/{step?}/{id?}', [CustomerController::class, 'create'])
        ->name('customers.create');
    Route::post('/customers/create/{step?}/{id?}', [CustomerController::class, 'store'])
        ->name('customers.store');

    Route::get('/mentors/create/{payment?}/{step?}/{id?}', [MentorController::class, 'create'])
        ->name('mentors.create');
    Route::post('/mentors/store/{payment?}/{step?}/{id?}', [MentorController::class, 'store'])
        ->name('mentors.store');

    Route::get('', [HomeController::class, 'index'])
        ->name('index');

    Route::get('pages', [PageController::class, 'index'])
        ->name('pages.index');

    Route::get('startups/{for}/{type?}', [StartupController::class, 'index'])
        ->name('startups.index');
    Route::get('startups/{for}/{type?}/{id}/services', [StartupController::class, 'services'])
        ->name('startups.services.index');
});
