<?php

namespace Database\Factories;

use App\Models\Trip;
use Faker\Generator as Faker;

$factory->define(Trip::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTimeBetween('+1 week', '+2 weeks')->format('Y-m-d'),
    ];
});
