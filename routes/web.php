<?php

use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\LogoutController;
use App\Livewire\Account;
use App\Livewire\Admin;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Checkout\Success;
use App\Livewire\Home;
use App\Livewire\Order;
use App\Livewire\Orders;
use App\Livewire\Product\Products;
use App\Livewire\Product\Show;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::middleware(['guest'])->name('auth.')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

Route::post('/pdf/{order}', function ($order) {
    return Pdf::loadView('pdf.invoice', ['order' => \App\Models\Order::findOrFail($order)])->download('invoice-'. $order .'.pdf');
})->name('pdf');

// Email verification routes
Route::middleware('auth')->group(function () {
    Route::get('/email/verify', [EmailVerificationController::class, 'verifyView'])->name('verification.notice'); // Email verification view page
    Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify'); // Verify email

    Route::delete('/logout', LogoutController::class)->name('auth.logout');
});

Route::get('/account', Account::class)->middleware('verified')->name('account');

Route::name('orders.')->prefix('/orders')->middleware('verified')->group(function () {
    Route::get('/', Orders::class)->name('index');
    Route::get('/{orderId}', Order::class)->name('show');
});

Route::get('/admin', Admin::class)->middleware('admin')->name('admin');

Route::name('product.')->group(function () {
    Route::get('/products/{slug?}', Products::class)->name('index');
    Route::get('/{product:slug}', Show::class)->name('show');
});

Route::name('checkout.')->middleware('auth')->group(function () {
    Route::get('/checkout/success', Success::class)->name('success');
});
