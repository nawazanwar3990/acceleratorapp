<?php

use App\Http\Controllers\Dashboard\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/print-installment-plans', [GeneralController::class, 'printInstallmentPlan'])->name('print.installment.plans');

Route::get('/print-flat-owner', [GeneralController::class, 'printFlatOwner'])->name('print.flat.owner');
Route::get('/filter-flat-owner-data', [GeneralController::class, 'filterFlatOwner'])->name('filter.flat.owner.data');

Route::get('/print-building', [GeneralController::class, 'printBuilding'])->name('print.building');
Route::get('/filter-building', [GeneralController::class, 'filterBuilding'])->name('filter.building');

Route::get('/print-nominee', [GeneralController::class, 'printNominee'])->name('print.nominee');
Route::get('/filter-nominee', [GeneralController::class, 'filterNominee'])->name('filter.nominee');

Route::get('/print-hr', [GeneralController::class, 'printHr'])->name('print.hr');
Route::get('/filter-hr', [GeneralController::class, 'filterHr'])->name('filter.hr');

Route::get('/print-title-transfer-detail', [GeneralController::class, 'printTitleTransferDetails'])->name('print.title.transfer.detail');

Route::get('print-1',function (){
    return view('dashboard.print.print-theme.print-1.print');
});

Route::get('print-2',function (){
    return view('dashboard.print.print-theme.print-2.print');
});

Route::get('print-3',function (){
    return view('dashboard.print.print-theme.print-3.print');
});
