<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/about-us', [HomeController::class, 'about'])
    ->name('about');

Route::get('/mentors-message', [HomeController::class, 'mentor'])
    ->name('mentor');

Route::get('/contact-us', [ContactController::class, 'index'])
    ->name('contact');

Route::post('/contact-us', [ContactController::class, 'store'])
    ->middleware('throttle:3,1')
    ->name('contact.store');