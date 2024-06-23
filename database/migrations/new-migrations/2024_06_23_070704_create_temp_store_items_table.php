<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempStoreItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_store_items', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_id')->index('item_id');
            $table->integer('store_id')->index('store_id');
            $table->decimal('store_quant', 20, 2)->nullable();
            $table->decimal('damaged', 20, 2)->nullable();
            $table->decimal('default_quant', 20, 2)->nullable();
            $table->integer('shelf');
            $table->integer('shop_id')->index('shop_id');
            $table->integer('add_user');
            $table->timestamp('add_date')->nullable()->useCurrent();
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            
            $table->unique(['item_id', 'store_id', 'shop_id'], 'items_uniq');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_store_items');
    }
}
