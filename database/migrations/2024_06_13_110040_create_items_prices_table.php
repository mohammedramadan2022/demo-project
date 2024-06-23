<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_prices', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_id');
            $table->integer('list_id');
            $table->decimal('price', 10, 4);
            $table->integer('list_quant')->default(0);
            $table->integer('shop_id');
            $table->integer('add_user');
            $table->dateTime('add_date');
            $table->integer('edit_user');
            $table->dateTime('edit_date');
            
            $table->unique(['item_id', 'list_id'], 'item_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_prices');
    }
}
