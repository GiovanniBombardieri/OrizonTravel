<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TripController;

// Rotte per i Paesi (Countries)
Route::get('countries', [CountryController::class, 'index']);   // Mostra tutti i paesi
Route::post('countries', [CountryController::class, 'store']);  // Crea un nuovo paese
Route::get('countries/{country}', [CountryController::class, 'show']); // Mostra un paese specifico
Route::put('countries/{country}', [CountryController::class, 'update']); // Aggiorna un paese
Route::delete('countries/{country}', [CountryController::class, 'destroy']); // Elimina un paese

// Rotte per i Viaggi (Trips)
Route::get('trips', [TripController::class, 'index']);   // Mostra tutti i viaggi
Route::post('trips', [TripController::class, 'store']);  // Crea un nuovo viaggio
Route::get('trips/{trip}', [TripController::class, 'show']); // Mostra un viaggio specifico
Route::put('trips/{trip}', [TripController::class, 'update']); // Aggiorna un viaggio
Route::delete('trips/{trip}', [TripController::class, 'destroy']); // Elimina un viaggio
