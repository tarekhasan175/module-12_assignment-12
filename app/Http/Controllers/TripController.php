<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function create()
    {
        $trips = Trip::all();
        return view('trips.create', compact('trips'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'location_from' => 'required|string',
            'location_to' => 'required|string',
        ]);

        Trip::create([
            'date' => $validatedData['date'],
            'location_from' => $validatedData['location_from'],
            'location_to' => $validatedData['location_to'],
        ]);

        $trips = Trip::all();

        return view('trips.create', compact('trips'))->with('success', 'Trip created successfully!');
    }

    public function index()
    {
        $trips = Trip::all();
        return view('trips.index', compact('trips'));
    }
}
