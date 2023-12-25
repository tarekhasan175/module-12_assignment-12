<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use App\Models\SeatAllocation;

class SeatController extends Controller
{
    public function book($trip = null)
    {
        if ($trip) {
            $trip = Trip::findOrFail($trip);
            $availableSeats = $trip->availableSeats();
        } else {
            $availableSeats = collect(range(1, 36));
        }

        return view('seats.book', compact('trip', 'availableSeats'));
    }

    public function reserve(Request $request)
    {
        $validatedData = $request->validate([
            'trip_id' => 'required|exists:trips,id',
            'seat_number' => 'required|integer',
        ]);

        $trip = Trip::find($validatedData['trip_id']);

        if ($trip->isSeatAvailable($validatedData['seat_number'])) {
            SeatAllocation::create([
                'trip_id' => $validatedData['trip_id'],
                'seat_number' => $validatedData['seat_number'],
                'user_id' => auth()->id(), // Assuming you're using authentication
            ]);

            return redirect('/')->with('success', 'Seat reserved successfully!');
        } else {
            return redirect()->back()->with('error', 'Seat is already taken.');
        }
    }
}
