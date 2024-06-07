<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trips')->truncate(); // Truncate the table

        $trips = [
            [
                'trip_id' => '1',
                'route_id' => '1',
                'service_id' => 1,
                'trip_headsign' => 'Trip 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => '2',
                'route_id' => '2',
                'service_id' => 2,
                'trip_headsign' => 'Trip 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more trips here
        ];

        DB::table('trips')->insert($trips);
    }
}
