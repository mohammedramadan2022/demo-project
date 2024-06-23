<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsCollectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_collection', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_id');
            $table->integer('main_item');
            $table->decimal('quant', 10, 4);
            $table->decimal('main_result', 10, 2)->default(1.00);
            $table->integer('shop_id');
            $table->timestamp('add_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_collection');
    }
}
