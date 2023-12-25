<?php

namespace Database\Factories;

use App\Models\Trip;
use App\Models\User;
use Faker\Generator as Faker;
use App\Models\SeatAllocation;

$factory->define(SeatAllocation::class, function (Faker $faker) {
    $trip = Trip::inRandomOrder()->first();
    $user = User::inRandomOrder()->first();

    return [
        'trip_id' => $trip->id,
        'seat_number' => $faker->numberBetween(1, 36),
        'user_id' => $user->id,
    ];
});
