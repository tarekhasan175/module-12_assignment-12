<!-- resources/views/trips/index.blade.php -->

@extends('layouts.app')

@section('title', 'All Trips')

@section('content')
    <h2>All Trips</h2>

    {{-- Display all trips --}}
    <ul>
        @foreach ($trips as $trip)
            <li>
                <strong>Date:</strong> {{ $trip->date }}, 
                <strong>From:</strong> {{ $trip->location_from }}, 
                <strong>To:</strong> {{ $trip->location_to }}
            </li>
        @endforeach
    </ul>
@endsection
