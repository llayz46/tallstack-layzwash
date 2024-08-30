<?php

use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\LogoutController;
use App\Livewire\Account;
use App\Livewire\Admin;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Home;
use App\Livewire\Product\Show;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::middleware(['guest'])->name('auth.')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

// Email verification routes
Route::middleware('auth')->group(function () {
    Route::get('/email/verify', [EmailVerificationController::class, 'verifyView'])->name('verification.notice'); // Email verification view page
    Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify'); // Verify email

    Route::delete('/logout', LogoutController::class)->name('auth.logout');
});


Route::get('/account', Account::class)->middleware('verified')->name('account');

Route::get('/admin', Admin::class)->middleware('admin')->name('admin');

Route::get('/{slug}-{product}', Show::class)->middleware('verified')->name('product.show');
