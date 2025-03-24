<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::middleware('api')->group(function () {
    Route::apiResource('bookings', BookingController::class);
});
