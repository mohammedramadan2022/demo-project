<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempInventoryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_inventory_details', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('inventory_id');
            $table->integer('item_id');
            $table->decimal('quantity', 10, 4);
            $table->decimal('current_quantity', 10, 4);
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
        Schema::dropIfExists('temp_inventory_details');
    }
}
