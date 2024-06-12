<?php

namespace App\Imports;

use App\Models\StopTime;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class StopTimesImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new StopTime([
            'trip_id' => $row['trip_id'],
            'arrival_time' => $this->formatTime($row['arrival_time']),
            'departure_time' => $this->formatTime($row['departure_time']),
            'stop_id' => $row['stop_id'],
            'stop_sequence' => $row['stop_sequence'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    private function formatTime($time)
    {
        return $time;
    }
}
