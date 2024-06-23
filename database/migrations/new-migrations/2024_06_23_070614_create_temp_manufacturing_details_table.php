<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempManufacturingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_manufacturing_details', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('order_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->decimal('quantity', 10, 4)->nullable();
            $table->integer('shop_id');
            $table->decimal('pay_price', 20, 6)->nullable();
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
        Schema::dropIfExists('temp_manufacturing_details');
    }
}
