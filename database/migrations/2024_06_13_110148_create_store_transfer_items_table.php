<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreTransferItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_transfer_items', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_id');
            $table->decimal('quantity', 10, 4);
            $table->integer('order_id');
            $table->integer('shop_id');
            $table->decimal('unit_quantity', 10, 4)->default(1.0000);
            $table->integer('unit_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_transfer_items');
    }
}
