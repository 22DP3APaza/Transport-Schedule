<?php

namespace App\Imports;

use App\Models\Stop;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StopsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Stop([
            'stop_id' => $row['stop_id'],
            'stop_name' => $row['stop_name'],
            'stop_desc' => $row['stop_desc'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
