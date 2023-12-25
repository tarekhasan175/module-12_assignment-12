<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Trip routes
Route::get('/trips/create', [TripController::class, 'create']);
Route::post('/trips/store', [TripController::class, 'store'])->name('trips.store');
Route::get('/trips', [TripController::class, 'index'])->name('trips.index')->name('trips');

// Seat routes
Route::get('/seats/book/{trip?}', [SeatController::class, 'book']);
Route::post('/seats/reserve', [SeatController::class, 'reserve']);

// User routes
Route::get('/users', [UserController::class, 'index']);