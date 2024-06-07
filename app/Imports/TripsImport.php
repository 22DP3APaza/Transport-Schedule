<?php
// app/Imports/TripsImport.php

namespace App\Imports;

use App\Models\Trip;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TripsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Trip([
            'trip_id' => $row['trip_id'],
            'route_id' => $row['route_id'],
            'service_id' => $row['service_id'],
            'trip_headsign' => $row['trip_headsign'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
// namespace App\Imports;

// use App\Models\Trip;
// use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

// class TripsImport implements ToModel, WithHeadingRow
// {
//     public function model(array $row)
//     {
//         // Use the upsert method to avoid duplicates and update existing rows
//         Trip::upsert(
//             [
//                 'trip_id' => $row['trip_id'],
//                 'route_id' => $row['route_id'],
//                 'service_id' => $row['service_id'],
//                 'trip_headsign' => $row['trip_headsign'],
//                 'created_at' => now(),
//                 'updated_at' => now(),
//             ],
//             ['trip_id'], // unique column to check duplicates
//             ['route_id', 'service_id', 'trip_headsign', 'updated_at'] // columns to update if duplicate is found
//         );
//     }
// }
