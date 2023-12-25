@extends('layouts.app')

@section('title', 'All Trips')

@section('content')
    <div class="container">
        <h2 class="mt-4">All Trips</h2>

        <ul class="list-group">
            @forelse ($trips as $trip)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <strong>Date:</strong> {{ $trip->date }}<br>
                            <strong>From:</strong> {{ $trip->location_from }}<br>
                            <strong>To:</strong> {{ $trip->location_to }}
                        </div>
                        <div>
                            <p><strong>Created by: </strong>user</p>
                        </div>
                    </div>
                </li>
            @empty
                <li class="list-group-item">No trips available</li>
            @endforelse
        </ul>
    </div>
@endsection
