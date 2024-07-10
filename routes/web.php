<?php

use Illuminate\Support\Facades\Route;

Route::domain('carlton.michaelzingraf.com')->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/booking/request', [\App\Http\Controllers\HomeController::class, 'bookingRequest'])->name('booking.request');
    Route::get('thanks', [\App\Http\Controllers\HomeController::class, 'thanks'])->name('thanks');
});
