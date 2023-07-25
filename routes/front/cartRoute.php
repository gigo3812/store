<?php


/** routes products */

use App\Http\Controllers\CartController;

Route::middleware('auth')->prefix('cart')->group(function () {
    Route::post('/add', [CartController::class, 'addToCart']);
    Route::get('/index', [CartController::class, 'showCart']);
    Route::post('/check-stock', [CartController::class, 'checkStock']);
});


Route::get('/payment-request', [CartController::class, 'paymentRequest']);
Route::get('/verify-payment', [CartController::class, 'verifyPayment'])->name('cart.verify');
