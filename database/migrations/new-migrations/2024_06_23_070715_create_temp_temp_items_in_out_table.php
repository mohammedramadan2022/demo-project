<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempTempItemsInOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_temp_items_in_out', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->integer('item_id');
            $table->integer('user_id');
            $table->integer('type');
            $table->timestamp('date')->nullable()->useCurrent();
            $table->integer('shop_id');
            $table->integer('store_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_temp_items_in_out');
    }
}
