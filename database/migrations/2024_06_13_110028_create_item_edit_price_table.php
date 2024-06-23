<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemEditPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_edit_price', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item')->nullable();
            $table->decimal('old_price', 10, 4)->nullable();
            $table->decimal('new_price', 10, 4)->nullable();
            $table->dateTime('date')->nullable();
            $table->integer('user')->nullable();
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
        Schema::dropIfExists('item_edit_price');
    }
}
