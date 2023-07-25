<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'panel'], function () {
    Voyager::routes();
});

/** front route */
require 'front/frontRoute.php';
require 'front/cartRoute.php';

/** test route */
require 'testRoute.php';
