<?php

use App\Http\Controllers\CMS\BlogController;
use App\Http\Controllers\CMS\ContactUsController;
use App\Http\Controllers\CMS\FaqSectionController;
use App\Http\Controllers\CMS\FaqTopicController;
use App\Http\Controllers\CMS\LayoutController;
use App\Http\Controllers\CMS\MenuController;
use App\Http\Controllers\CMS\PageController;
use App\Http\Controllers\CMS\SectionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'cms', 'as' => 'cms.'], function () {

    Route::resource('/layouts',LayoutController::class)->names('layouts');
    Route::resource('/sections',SectionController::class)->names('sections');
    Route::resource('/pages',PageController::class)->names('pages');
    Route::resource('/menus',MenuController::class)->names('menus');
    Route::resource('/faq-topics',FaqTopicController::class)->names('faq-topics');
    Route::resource('/faq-sections',FaqSectionController::class)->names('faq-sections');
    Route::resource('/contact-us', ContactUsController::class)->names('contact-us');
    Route::resource('/blogs', BlogController::class)->names('blogs');

    Route::post('/sections/upload', [SectionController::class, 'uploadImage'])->name('sections.upload');
    Route::post('/layouts/upload', [LayoutController::class, 'uploadImage'])->name('layouts.upload');
    Route::post('/sections/status/update', [SectionController::class, 'sectionUpdateStatus'])->name('sections.active.update');
    Route::post('/layout/status/update', [LayoutController::class, 'layoutUpdateStatus'])->name('layout.active.update');

    Route::post('/menus/status/update', [MenuController::class, 'menusUpdateStatus'])->name('menus.active.update');
    Route::post('/pages/status/update', [PageController::class, 'pagesUpdateStatus'])->name('pages.active.update');

    Route::post('/sections/status/update/all', [SectionController::class, 'sectionUpdateStatusAll'])->name('sections.active.update.all');
    Route::post('/layout/status/update/all', [LayoutController::class, 'layoutUpdateStatusAll'])->name('layout.active.update.all');
    Route::post('/menus/status/update/all', [MenuController::class, 'menuUpdateStatusAll'])->name('menus.active.update.all');
    Route::post('/pages/status/update/all', [PageController::class, 'pagesUpdateStatusAll'])->name('pages.active.update.all');
});
