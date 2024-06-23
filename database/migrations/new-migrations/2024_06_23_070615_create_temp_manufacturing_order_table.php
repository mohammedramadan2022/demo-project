<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempManufacturingOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_manufacturing_order', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('order_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->decimal('quantity', 10, 0)->nullable();
            $table->integer('bill_id')->nullable();
            $table->dateTime('add_date')->nullable();
            $table->integer('add_user')->nullable();
            $table->integer('shop_id');
            $table->integer('store_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_manufacturing_order');
    }
}
