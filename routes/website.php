<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\StartupController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Website\InvestmentController;
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

    Route::post('/package-payment/store', [SubscriptionController::class, 'storePackagePayment'])
        ->name('package-payment.store');

    Route::post('/office-subscriptions/store', [SubscriptionController::class, 'storeOfficeSubscription'])
        ->name('office-subscriptions.store');


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

    Route::get('news', [NewsController::class, 'index'])
        ->name('news.index');
    Route::get('events', [EventController::class, 'index'])
        ->name('events.index');

    Route::get('plans/{for}/{type?}', [PlanController::class, 'index'])
        ->name('plans.index');

    Route::get('startups/{for}/{type?}', [StartupController::class, 'index'])
        ->name('startups.index');
    Route::get('startups/{for?}/{type?}/{id}/services', [StartupController::class, 'services'])
        ->name('startups.services.index');
    Route::get('startups/{for?}/{type?}/{id}/services/{service_id}', [StartupController::class, 'listServices'])
        ->name('startups.services.list');
    Route::get('startups/{for?}/{type?}/{id}/plans/{service_id}', [StartupController::class, 'listServicePlans'])
        ->name('startups.services.plans');
    Route::get('startups/{for?}/{type?}/{id}/subscription/{service_id}', [StartupController::class, 'applyServiceSubscription'])
        ->name('startups.services.subscription.apply');

    Route::get('buildings/{user_id}', [StartupController::class, 'buildings'])
        ->name('buildings.index');
    Route::get('floors/{user_id}/{building_id?}', [StartupController::class, 'floors'])
        ->name('floors.index');
    Route::get('offices/{user_id}/{building_id?}/{floor_id?}', [StartupController::class, 'offices'])
        ->name('offices.index');

    Route::get('office/{office_id}/plans', [StartupController::class, 'office_plans'])
        ->name('office.plans.index');

    Route::get('privacy-policy',function (){});
    Route::get('term-and-condition',function (){});
    Route::get('data-deletion',function (){});

    Route::get('/investment', [InvestmentController::class, 'index'])->name('investment.index');
    Route::get('/investment/basic',[InvestmentController::class,'basic'])->name('investment.basic');
    Route::get('/investment/product',[InvestmentController::class,'product'])->name('investment.product');
    Route::get('/investment/equity',[InvestmentController::class,'equity'])->name('investment.equity');
    Route::get('/investment/team', [InvestmentController::class, 'team'])->name('investment.team');
    Route::get('/investment/market', [InvestmentController::class, 'market'])->name('investment.market');
    Route::get('/investment/curiosity', [InvestmentController::class, 'curiosity'])->name('investment.curiosity');

    Route::post('/investment/save-later', [InvestmentController::class, 'saveLater'])->name('investment.save-later');

    Route::post('/investment/store',[InvestmentController::class,'store'])
        ->name('investment.store');
});
