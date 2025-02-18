<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

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

        return response()->json($query->with('countries')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
