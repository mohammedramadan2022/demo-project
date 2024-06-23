<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempConvertMoneyItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_convert_money_items', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('shop_id');
            $table->integer('convert_id');
            $table->integer('item_id');
            $table->integer('convert_quant');
            $table->decimal('convert_price', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_convert_money_items');
    }
}
