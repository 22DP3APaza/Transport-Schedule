<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StopTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stop_times')->truncate(); // Truncate the table

        $stopTimes = [
            [
                'trip_id' => '1',
                'arrival_time' => '08:00:00',
                'departure_time' => '08:05:00',
                'stop_id' => '1',
                'stop_sequence' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trip_id' => '1',
                'arrival_time' => '08:10:00',
                'departure_time' => '08:15:00',
                'stop_id' => '2',
                'stop_sequence' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more stop times here
        ];

        DB::table('stop_times')->insert($stopTimes);
    }
}
