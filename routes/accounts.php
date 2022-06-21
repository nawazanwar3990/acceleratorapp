<?php

use App\Http\Controllers\Accounts\EmployeeLoanController;
use App\Http\Controllers\Accounts\ExpenseController;
use App\Http\Controllers\Accounts\ExpenseHeadController;
use App\Http\Controllers\RealEstate\Accounts\LedgerController;
use App\Http\Controllers\RealEstate\Accounts\ReportController;
use App\Http\Controllers\RealEstate\Accounts\VoucherController;
use App\Http\Controllers\RealEstate\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('create-account-head', [GeneralController::class, 'createAccountHead'])->name('create.account-head');
Route::post('save-account-head', [GeneralController::class, 'saveAccountHead'])->name('save.account-head');

Route::resource('/expense-heads', ExpenseHeadController::class, ['names' => 'expense.heads']);
Route::resource('/expenses', ExpenseController::class, ['names' => 'expenses']);
Route::post('/mark-expense-paid', [ExpenseController::class, 'markAsPaid'])->name('mark-expense-paid');
Route::resource('/employee-loan', EmployeeLoanController::class, ['names' => 'employee-loan']);
Route::post('/employee-loan-details', [EmployeeLoanController::class, 'employeeLoanDetails'])->name('employee-loan-details');
//Ledgers
Route::get('/seller-ledger', [LedgerController::class, 'sellerLedger'])->name('seller-ledger');
Route::get('/buyer-ledger', [LedgerController::class, 'buyerLedger'])->name('buyer-ledger');
Route::get('/broker-ledger', [LedgerController::class, 'brokerLedger'])->name('broker-ledger');
Route::get('/general-ledger', [LedgerController::class, 'generalLedger'])->name('general-ledger');
Route::post('/general-ledger-sub-heads', [LedgerController::class, 'getTransactionHeadsOfGeneralHead'])->name('get.general-ledger-sub-heads');

//Vouchers
Route::get('buyer-receiving-voucher', [VoucherController::class, 'buyerCashReceiving'])->name('voucher.buyer-receiving');
Route::post('save-buyer-receiving-voucher', [VoucherController::class, 'saveBuyerCashReceiving'])->name('voucher.save-buyer-receiving');
Route::post('sales-invoice-by-flat', [GeneralController::class, 'salesInvoicesByFlat'])->name('get.sales-invoice-by-flat');
Route::post('get-sales-details', [GeneralController::class, 'salesDetails'])->name('get.sales-details');

Route::get('buyer-installment-receiving-voucher', [VoucherController::class, 'buyerInstallmentReceiving'])->name('voucher.buyer-installment-receiving');
Route::post('save-buyer-installment-receiving-voucher', [VoucherController::class, 'saveBuyerInstallmentReceiving'])->name('voucher.save-buyer-installment-receiving');
Route::get('print-buyer-installment-receiving-voucher', [VoucherController::class, 'printBuyerInstallmentReceiving'])->name('print-buyer-installment-receiving');
Route::post('get-installment-detail', [GeneralController::class, 'getInstallmentDetails'])->name('get.installment-details');

Route::get('seller-payment-voucher', [VoucherController::class, 'sellerPayment'])->name('voucher.seller-payment');
Route::post('save-seller-payment-voucher', [VoucherController::class, 'saveSellerPayment'])->name('voucher.save-seller-payment');

Route::get('broker-payment-voucher', [VoucherController::class, 'brokerPayment'])->name('voucher.broker-payment');
Route::post('save-broker-payment-voucher', [VoucherController::class, 'saveBrokerPayment'])->name('voucher.save-broker-payment');
Route::get('print-broker-payment-voucher', [VoucherController::class, 'printBrokerPayment'])->name('print-broker-payment');
Route::post('get-broker-details', [GeneralController::class, 'brokerDetails'])->name('get.broker-details');

Route::get('debit-voucher', [VoucherController::class, 'debitVoucher'])->name('voucher.debit');
Route::post('save-debit-voucher', [VoucherController::class, 'saveDebitVoucher'])->name('voucher.save-debit');

Route::get('credit-voucher', [VoucherController::class, 'creditVoucher'])->name('voucher.credit');
Route::post('save-credit-voucher', [VoucherController::class, 'saveCreditVoucher'])->name('voucher.save-credit');

Route::get('opening-balance-voucher', [VoucherController::class, 'openingBalanceVoucher'])->name('voucher.opening-balance');
Route::post('save-opening-balance-voucher', [VoucherController::class, 'saveOpeningBalanceVoucher'])->name('voucher.save-opening-balance');

//Reports
Route::get('cashbook', [ReportController::class, 'cashBook'])->name('cashbook');
Route::get('profit-loss', [ReportController::class, 'profitLoss'])->name('profit-loss');
Route::get('balance-sheet', [ReportController::class, 'balanceSheet'])->name('balance-sheet');
Route::get('broker-report', [ReportController::class, 'brokerReport'])->name('broker-report');
Route::get('pending-collections', [ReportController::class, 'pendingCollections'])->name('pending-collections');
Route::get('flat-shop-wise-profit-loss', [ReportController::class, 'flatWiseProfitLossReport'])->name('flat-shop-wise-profit-loss');
Route::get('broker-wise-sales-report', [ReportController::class, 'brokerWiseSalesReport'])->name('broker-wise-sales-report');
