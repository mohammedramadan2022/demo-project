<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_sizes', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('item_id', 110);
            $table->integer('size_id');
            $table->integer('shop_id');
            $table->integer('add_user');
            $table->dateTime('add_date');
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_sizes');
    }
}
