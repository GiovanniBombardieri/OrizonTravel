<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Country::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:countries,name|max:255'
        ]);

        $country = Country::create([
            'name' => $request->name,
        ]);

        return response()->json($country, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        $country->load('trips');
        return response()->json($country, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        $request->validate([
            'name' => 'required|string|unique:countries,name|max:255'
        ]);

        $country->update([
            'name' => $request->name,
        ]);

        return response()->json($country, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return response()->json(
            [
                'message' => 'Country deleted successfully'
            ],
            200
        );
    }
}
