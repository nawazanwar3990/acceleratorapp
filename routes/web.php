<?php
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);
Route::get('subscription/expire', [SubscriptionController::class, 'expire'])->name('subscription.expire');
require __DIR__ . '/auth.php';
require __DIR__ . '/website.php';
require __DIR__ . '/dashboard.php';
require __DIR__ . '/cms.php';

