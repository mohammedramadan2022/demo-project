<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempItemsColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_items_colors', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('item_id', 110);
            $table->integer('color_id');
            $table->integer('shop_id');
            $table->integer('add_user');
            $table->dateTime('add_date');
            $table->integer('edit_user');
            $table->dateTime('edit_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_items_colors');
    }
}
