<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('man_order_details', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('order_id');
            $table->integer('item_id');
            $table->integer('store_id');
            $table->integer('quant');
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
        Schema::dropIfExists('man_order_details');
    }
}
