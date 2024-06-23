<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCloseShiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('close_shift', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('user_id');
            $table->decimal('amount', 20, 2)->default(0.00);
            $table->decimal('close_amnount', 20, 2)->nullable();
            $table->dateTime('close_time');
            $table->decimal('total_sales', 20, 2)->nullable();
            $table->decimal('last_close', 20, 2)->nullable();
            $table->integer('sale_point');
            $table->integer('shop_id');
            $table->integer('sale_point_to')->default(0);
            $table->decimal('amount_left', 10, 2)->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('close_shift');
    }
}
