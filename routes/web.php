<?php

use Illuminate\Support\Facades\Route;

//test sur la prod pour avoir la bonne uri
if( env('APP_ENV') === 'production' ) {
    Route::domain('carlton.michaelzingraf.com')->group(function () {
        Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::post('/booking/request', [\App\Http\Controllers\HomeController::class, 'bookingRequest'])->name('booking.request');
        Route::get('thanks', [\App\Http\Controllers\HomeController::class, 'thanks'])->name('thanks');
    });
}else if( env('APP_ENV') === 'local'  ){
    Route::domain('carlton.localhost')->group(function () {
        Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::post('/booking/request', [\App\Http\Controllers\HomeController::class, 'bookingRequest'])->name('booking.request');
        Route::get('thanks', [\App\Http\Controllers\HomeController::class, 'thanks'])->name('thanks');
    });
}

