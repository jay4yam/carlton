<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/booking/request', [\App\Http\Controllers\HomeController::class, 'bookingRequest'])->name('booking.request');
