<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id('sr_no'); // Sr No.
            $table->string('worker_name')->nullable(); // Worker Name
            $table->string('type_of_worker')->nullable(); // Type of Worker
            $table->string('total_work_day')->nullable(); // Total Work Day
            $table->string('sunday_holiday')->nullable(); // Sunday/Holiday
            $table->string('ot')->nullable(); // OT
            $table->integer('total_days')->nullable(); // Total Days
            $table->string('month_rate')->nullable(); // Month Rate
            $table->string('total_present_amt')->nullable(); // Total Present Amt
            $table->string('ot_amt')->nullable(); // OT Amt
            $table->string('grand_total')->nullable(); // Grand Total
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
