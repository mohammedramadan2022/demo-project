<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_slider', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('shop_id');
            $table->string('src', 191)->nullable();
            $table->string('image_link', 191)->nullable();
            $table->tinyInteger('outside_link')->nullable();
            $table->integer('item_id')->nullable();
            $table->string('title', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_slider');
    }
}
