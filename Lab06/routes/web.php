<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'trips'], function () {
    Route::get('/', [TripController::class, 'index'])->name('trips.index');
    Route::get('/user/{id}', [TripController::class, 'show'])->name('trips.show');
    Route::get('/random', [TripController::class, 'randomTrips'])->name('trips.random');
    Route::get('/cheapest', [TripController::class, 'cheapestTrips'])->name('trips.cheapest');
});



