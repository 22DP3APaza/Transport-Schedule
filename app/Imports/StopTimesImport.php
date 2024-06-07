<?php

namespace App\Imports;

use App\Models\StopTime;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StopTimesImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Format time values to HH:MM:SS format
        $arrivalTime = Carbon::parse($row['arrival_time'])->format('H:i:s');
        $departureTime = Carbon::parse($row['departure_time'])->format('H:i:s');

        return new StopTime([
            'trip_id' => $row['trip_id'],
            'arrival_time' => $arrivalTime,
            'departure_time' => $departureTime,
            'stop_id' => $row['stop_id'],
            'stop_sequence' => $row['stop_sequence'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
