@extends('layouts.app')

@section('title', 'Book Seat')

@section('content')
    <h2>Book a Seat</h2>

    @if ($trip)
        <p>Available Seats for Trip: {{ $trip->id }}</p>
    @else
        <p>Available Seats for All Trips</p>
    @endif

    <ul>
        @foreach($availableSeats as $seat)
            <li>{{ $seat }}</li>
        @endforeach
    </ul>

    <form action="/seats/reserve" method="post">
        @csrf

        @if ($trip)
            <input type="hidden" name="trip_id" value="{{ $trip->id }}">
        @endif

        <div class="mb-3">
            <label for="seat_number" class="form-label">Select Seat Number:</label>
            <input type="number" class="form-control" id="seat_number" name="seat_number" min="1" max="36" required>
        </div>

        <button type="submit" class="btn btn-success">Reserve Seat</button>
    </form>
@endsection
