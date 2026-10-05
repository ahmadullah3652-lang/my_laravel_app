<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MeterController;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TariffController;

// د کور پاڼه (Index)
Route::get('/index', function () {
    return view('index');
});

// زموږ په اړه (About)
Route::get('/about', function () {
    return view('about');
});

// ځانګړتیاوې (Features)
Route::get('/features', function () {
    return view('features');
});

// بیې (Pricing)
Route::get('/pricing', function () {
    return view('pricing');
});

// راپور (Report)
Route::get('/report', function () {
    return view('report');
});

// ډشبورډ (Dashboard)
Route::get('/dashboard', function () {
    return view('dashboard');
});

// ننوتل (Login)
Route::get('/login', function () {
    return view('login');
});

// راجستر (Register)
Route::get('/register', function () {
    return view('register');
});

// محرمیت (Privacy)
Route::get('/privacy', function () {
    return view('privacy');
});

// شرایط (Terms)
Route::get('/terms', function () {
    return view('terms');
});

// د کنټرولرونو روټونه
Route::resource('users', UserController::class);
Route::resource('customers', CustomerController::class);
Route::resource('meters', MeterController::class);
Route::resource('readings', ReadingController::class);
Route::resource('bills', BillController::class);
Route::resource('payments', PaymentController::class);
Route::resource('tariffs', TariffController::class);
