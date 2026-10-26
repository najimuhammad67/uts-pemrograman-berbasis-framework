<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopDetailController;
use App\Http\Controllers\TablesController;
use Illuminate\Support\Facades\Route;

// Landing routes
Route::get('/', [HomeController::class, 'index'])->name('landing.home');
Route::get('/shop', [ShopController::class, 'index'])->name('landing.shop');
Route::get('/shop-detail', [ShopDetailController::class, 'index'])->name('landing.shop-detail');
Route::get('/cart', [CartController::class, 'index'])->name('landing.cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('landing.checkout');
Route::get('/contact', [ContactController::class, 'index'])->name('landing.contact');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
    Route::get('/components', [ComponentsController::class, 'index'])->name('components');
    Route::get('/forms', [FormsController::class, 'index'])->name('forms');
    Route::get('/tables', [TablesController::class, 'index'])->name('tables');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
});
