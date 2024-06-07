<?php
// app/Imports/RoutesImport.php

namespace App\Imports;

use App\Models\Route;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RoutesImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Route([
            'route_id' => $row['route_id'],
            'route_short_name' => $row['route_short_name'],
            'route_long_name' => $row['route_long_name'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
