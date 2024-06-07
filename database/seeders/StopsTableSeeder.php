<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete all records
        DB::table('stops')->delete();

        $stops = [
            [
                'stop_id' => '1',
                'stop_name' => 'Stop 1',
                'stop_desc' => 'Description for Stop 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'stop_id' => '2',
                'stop_name' => 'Stop 2',
                'stop_desc' => 'Description for Stop 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more stops here
        ];

        DB::table('stops')->insert($stops);
    }
}
