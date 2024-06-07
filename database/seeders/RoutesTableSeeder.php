<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete all records
        DB::table('routes')->delete();

        $routes = [
            [
                'route_id' => '1',
                'route_short_name' => 'R1',
                'route_long_name' => 'Route 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'route_id' => '2',
                'route_short_name' => 'R2',
                'route_long_name' => 'Route 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more routes here
        ];

        DB::table('routes')->insert($routes);
    }
}
