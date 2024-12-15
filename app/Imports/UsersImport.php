<?php

namespace App\Imports;

use App\Models\Bill;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bill([
            'sr_no' => $row[0],             // Sr. No column
            'worker_name' => $row[1],       // Worker Name column
            'type_of_worker' => $row[2],    // Type of Worker column
            'total_work_day' => $row[3],    // Total Work Day column
            'sunday_holiday' => $row[4],    // Sunday/Holiday column
            'ot' => $row[5],                // Overtime column
            'total_days' => $row[6],        // Total Days column
            'month_rate' => $row[7],        // Monthly Rate column
            'total_present_amt' => $row[8], // Total Present Amount column
            'ot_amt' => $row[9],            // OT Amount column
            'grand_total' => $row[10],      // Grand Total column
        ]);
    }
}
