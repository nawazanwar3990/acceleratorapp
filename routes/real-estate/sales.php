<?php

use App\Http\Controllers\Dashboard\Sales\InstallmentPlanController;
use App\Http\Controllers\Dashboard\Sales\InstallmentTermController;
use App\Http\Controllers\Dashboard\Sales\QuotationController;
use App\Http\Controllers\Dashboard\Sales\SalesController;
use Illuminate\Support\Facades\Route;

Route::get('/sales/title-transfer-print', [SalesController::class, 'titleTransferPrint'])->name('sales.title-transfer-print');
Route::get('/sales/seller-affidavit-print', [SalesController::class, 'sellerAffidavitPrint'])->name('sales.seller-affidavit-print');
Route::get('/sales/commodity-deal-closings', [SalesController::class, 'commodityDealClosings'])->name('sales.commodity-deal-closings');
Route::get('/sales/update-commodity-deal-closings', [SalesController::class, 'commodityDealClosings'])->name('sales.update-commodity-deal-closings');
Route::resource('/sales', SalesController::class, ['names' => 'sales']);
Route::resource('/installment-plans', InstallmentPlanController::class, ['names' => 'installment-plans']);
Route::resource('/installment-term', InstallmentTermController::class, ['names' => 'installment-term']);
Route::resource('/quotations', QuotationController::class, ['names' => 'quotations']);
Route::post('/add-installment-plan-ajax', [InstallmentPlanController::class, 'addInstallmentPlanAjax'])->name('add.installment-plan-ajax');
