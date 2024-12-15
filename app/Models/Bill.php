<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table  =  "bills";

    protected $fillable = [
        'sr_no',
        'worker_name',
        'type_of_worker',
        'total_work_day',
        'sunday_holiday',
        'ot',
        'total_days',
        'month_rate',
        'total_present_amt',
        'ot_amt',
        'grand_total',
    ];
}
