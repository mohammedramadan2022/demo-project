<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_attendance', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('shop_id');
            $table->integer('user_id');
            $table->date('date_attendance');
            $table->integer('attendance_type')->default(0)->comment("0 none, 1 attend, 2 absen");
            $table->time('time_from')->nullable();
            $table->time('time_to')->nullable();
            $table->integer('store_id')->default(0);
            
            $table->unique(['user_id', 'shop_id', 'date_attendance'], 'emp_att');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_attendance');
    }
}
