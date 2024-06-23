<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_unit', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_id');
            $table->integer('unit_id');
            $table->integer('unit_type')->default(0);
            $table->decimal('unit_value', 10, 4);
            $table->decimal('unit_price', 10, 4);
            $table->string('unit_barcode', 191);
            $table->boolean('Screenhidden')->default(0);
            $table->integer('shop_id');
            $table->boolean('delete_with_sync')->default(0);
            
            $table->unique(['item_id', 'unit_id', 'shop_id', 'unit_barcode'], 'nodoupilcate');
            $table->index(['shop_id', 'unit_barcode'], 'shop_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_unit');
    }
}
