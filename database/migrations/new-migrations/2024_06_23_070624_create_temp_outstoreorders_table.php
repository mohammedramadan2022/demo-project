<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempOutstoreordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_outstoreorders', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('order_id');
            $table->dateTime('order_date');
            $table->integer('client_id');
            $table->dateTime('delivery_date');
            $table->integer('order_state')->default(0)->comment("0 new 1 ready 2 delivary 3 cancel");
            $table->integer('bill_id')->nullable();
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
        Schema::dropIfExists('temp_outstoreorders');
    }
}
