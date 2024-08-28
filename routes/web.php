<?php

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

Route::delete('/logout', LogoutController::class)->middleware('auth')->name('auth.logout');

Route::get('/account', Account::class)->middleware('auth')->name('account');

Route::get('/admin', Admin::class)->middleware('admin')->name('admin');

Route::get('/{slug}-{product}', Show::class)->name('product.show');
