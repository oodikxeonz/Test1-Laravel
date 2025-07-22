<?php

use App\Http\Controllers\Clove;
use App\Http\Controllers\Sage;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\main;
use Illuminate\Support\Facades\Route;

Route::resource('home', Clove::class);

Route::resource('main', main::class);

Route::resource('about', Sage::class);

Route::resource('contact',ContactController::class);

