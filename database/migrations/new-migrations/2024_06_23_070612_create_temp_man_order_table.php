<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempManOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_man_order', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->date('order_date');
            $table->integer('user_id');
            $table->tinyInteger('order_type')->comment("صفر للصرف واحد للتوريد");
            $table->integer('add_user');
            $table->dateTime('add_date');
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            $table->integer('shop_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_man_order');
    }
}
