@extends('layouts.app')

@section('title', 'Create Trip')

@section('content')
    <h2>Create a New Trip</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('trips.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="date" class="form-label">Trip Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="mb-3">
            <label for="location_from" class="form-label">From:</label>
            <input type="text" class="form-control" id="location_from" name="location_from" required>
        </div>

        <div class="mb-3">
            <label for="location_to" class="form-label">To:</label>
            <input type="text" class="form-control" id="location_to" name="location_to" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Trip</button>
    </form>
@endsection
