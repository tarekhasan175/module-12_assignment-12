<?php

namespace Database\Seeders;

use App\Models\SeatAllocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatAllocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeatAllocation::factory()->count(10)->create();
    }
}
