<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'index']);

/** routes products */
Route::get('/products', [FrontController::class, 'products']);
Route::get('/product/{slug}', [FrontController::class, 'product']);

/** routes posts */
Route::get('/posts', [FrontController::class, 'posts']);
Route::get('/post/{slug}', [FrontController::class, 'post']);


/** contact-us */
Route::get('contact-us', [FrontController::class, 'contactUs']);


/** Auth */
Route::post('/user-auth', [AuthController::class, 'index']);
