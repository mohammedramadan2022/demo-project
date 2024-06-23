<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempStoreOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_store_order', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('order_no');
            $table->integer('shop_id');
            $table->integer('store_from');
            $table->integer('store_to');
            $table->dateTime('date_order');
            $table->integer('add_user');
            $table->boolean('confirm')->default(1);
            $table->dateTime('date_confirm');
            $table->integer('confirm_by');
            $table->boolean('cancel')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_store_order');
    }
}
