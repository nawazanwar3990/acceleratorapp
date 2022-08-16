<?php

use App\Http\Controllers\Dashboard\BAController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\EventController;
use App\Http\Controllers\Dashboard\FreelancerController;
use App\Http\Controllers\Dashboard\MeetingController;
use App\Http\Controllers\Website\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('package/expire', [PageController::class, 'expire'])
    ->name('package.expire');

Route::group(['prefix' => '/', 'as' => 'website.'], function () {
    require __DIR__ . '/website.php';
});
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::get('/home', [DashboardController::class, 'index'])
        ->name('index')
        ->middleware('has_package');

    require __DIR__ . '/service.php';
    require __DIR__ . '/user.php';
    require __DIR__ . '/system.php';
    require __DIR__ . '/plan.php';

    require __DIR__ . '/working-space.php';
    require __DIR__ . '/subscription.php';

    Route::get('/ba/create/{step?}/{id?}', [BAController::class, 'create'])
        ->name('ba.create');
    Route::post('/ba/store/{step?}/{id?}', [BAController::class, 'store'])
        ->name('ba.store');
    Route::post('/ba/payment-snippet/store', [BAController::class, 'storePaymentSnippet'])
        ->name('payment-snippet-store');


    Route::get('/freelancers/create/{step?}/{id?}', [FreelancerController::class, 'create'])
        ->name('freelancers.create');
    Route::post('/freelancers/create/{step?}/{id?}', [FreelancerController::class, 'store'])
        ->name('freelancers.store');

    Route::resource('/events', EventController::class, ['names' => 'events'])
        ->middleware('has_package');
    Route::resource('/meeting-rooms', MeetingController::class, ['names' => 'meeting-rooms'])
        ->middleware('has_package');

    Route::get('/test-mail', function () {
        echo "yes";
    });
});
require __DIR__ . '/auth.php';
