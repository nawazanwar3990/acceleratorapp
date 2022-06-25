<?php

use App\Http\Controllers\Dashboard\FrontDesk\ComplainController;
use App\Http\Controllers\Dashboard\FrontDesk\FrontDeskSetup\CallTypeController;
use App\Http\Controllers\Dashboard\FrontDesk\FrontDeskSetup\ComplainTypeController;
use App\Http\Controllers\Dashboard\FrontDesk\FrontDeskSetup\PurposeController;
use App\Http\Controllers\Dashboard\FrontDesk\FrontDeskSetup\ReferenceController;
use App\Http\Controllers\Dashboard\FrontDesk\FrontDeskSetup\SourceController;
use App\Http\Controllers\Dashboard\FrontDesk\PhoneCallLogController;
use App\Http\Controllers\Dashboard\FrontDesk\PostalDispatchController;
use App\Http\Controllers\Dashboard\FrontDesk\PostalReceiveController;
use App\Http\Controllers\Dashboard\FrontDesk\SaleEnquiryController;
use App\Http\Controllers\Dashboard\FrontDesk\VisitorBookController;
use Illuminate\Support\Facades\Route;

Route::resource('/call-type', CallTypeController::class, ['names' => 'call-type']);
Route::resource('/complain-type', ComplainTypeController::class, ['names' => 'complain-type']);
Route::resource('/source', SourceController::class, ['names' => 'source']);
Route::resource('/reference', ReferenceController::class, ['names' => 'reference']);
Route::resource('/purpose', PurposeController::class, ['names' => 'purpose']);

Route::resource('/sales-enquiry', SaleEnquiryController::class, ['names' => 'sales-enquiry']);
Route::resource('/visitor-book', VisitorBookController::class, ['names' => 'visitor-book']);
Route::resource('/phone-call-log', PhoneCallLogController::class, ['names' => 'phone-call-log']);
Route::resource('/postal-dispatch', PostalDispatchController::class, ['names' => 'postal-dispatch']);
Route::resource('/postal-receive', PostalReceiveController::class, ['names' => 'postal-receive']);
Route::resource('/complain', ComplainController::class, ['names' => 'complain']);


