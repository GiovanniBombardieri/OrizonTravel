<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Country;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Prendiamo tutti i viaggi disponibili
        $query = Trip::query();

        // Filtro per paese
        if ($request->has('country_id')) {
            $query->whereHas('countries', function ($q) use ($request) {
                $q->where('countries.id', $request->country_id);
            });
        }

        // Filtro per numero minimo di posti disponibili
        if ($request->has('min_seats')) {
            $query->where('available_seats', '>=', $request->min_seats);
        }

        // Filtro per numero massimo di posti disponibili
        if ($request->has('max_seats')) {
            $query->where('available_seats', '<=', $request->max_seats);
        }

        return response()->json($query->with('countries')->get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'available_seats' => 'required|integer|min:1',
            'country_ids' => 'required|array',
            'country_ids.*' => 'exists:countries,id'
        ]);

        $trip = Trip::create([
            'available_seats' => $request->available_seats,
        ]);

        $trip->countries()->attach($request->country_ids);

        return response()->json($trip->load('countries'), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        $trip->load('countries');

        return response()->json($trip, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        $request->validate([
            'available_seats' => 'sometimes|required|integer|min:1',
            'country_ids' => 'sometimes|required|array',
            'country_ids.*' => 'exists:countries,id'
        ]);

        if ($request->has('available_seats')) {
            $trip->update([
                'available_seats' => $request->available_seats
            ]);
        }

        if ($request->has('country_ids')) {
            $trip->countries()->sync($request->country_ids);
        }

        return response()->json($trip->load('countries'), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();
        return response()->json(
            [
                'message' => 'Trip deleted successfully'
            ],
            200
        );
    }
}
