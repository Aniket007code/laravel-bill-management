<?php

namespace App\Exports;

use App\Models\Bill;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection,WithHeadings, WithMapping

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bill::all();
    }

    public function headings(): array
    {
        return [
            'Sr. No',
            'Worker Name',
            'Type of Worker',
            'Total Work Days',
            'Sunday/Holiday',
            'Overtime (OT)',
            'Total Days',
            'Monthly Rate',
            'Total Present Amount',
            'Overtime Amount',
            'Grand Total',
        ];
    }

    public function map($bill): array
    {
        return [
            $bill->sr_no,
            $bill->worker_name,
            $bill->type_of_worker,
            $bill->total_work_day,
            $bill->sunday_holiday,
            $bill->ot,
            $bill->total_days,
            $bill->month_rate,
            $bill->total_present_amt,
            $bill->ot_amt,
            $bill->grand_total,
        ];
    }



}
