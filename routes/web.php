<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Welcome2Controller;
use App\Http\Controllers\Welcome3Controller;


Route::resource('/', WelcomeController::class);
Route::resource('/-', Welcome2Controller::class);
Route::resource('/--', Welcome3Controller::class);
Route::resource('events', EventController::class);
Route::resource('galleries', GalleryController::class);
Route::resource('merchandises', MerchandiseController::class);

