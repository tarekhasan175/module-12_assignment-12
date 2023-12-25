@extends('layouts.app')

@section('title', 'Book Seat')

@section('content')
    <div class="container">
        <h2 class="mt-4">Book a Seat</h2>

        <div class="mb-4">
            @if ($trip)
                <p class="lead">Available Seats for Trip: {{ $trip->id }}</p>
            @else
                <p class="lead">Available Seats for All Trips</p>
            @endif
        </div>

        <ul class="list-group mb-4">
            @foreach($availableSeats as $seat)
                <li class="list-group-item">{{ $seat }}</li>
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
    </div>
@endsection
