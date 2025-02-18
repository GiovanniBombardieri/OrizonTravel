<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TripController;

// Rotte per i Paesi (Countries)
Route::apiResource('countries', CountryController::class);

// Rotte per i Viaggi (Trips)
Route::apiResource('trips', TripController::class);
