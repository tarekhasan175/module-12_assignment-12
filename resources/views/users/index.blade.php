@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <h2>User Profile</h2>


    @if ($user)
        <p>Welcome, {{ $user->name }}!</p>
    @else
        <p>User not found.</p>
    @endif
@endsection
