<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempItemRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_item_rates', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('shop_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->integer('rate')->nullable();
            $table->text('comment')->nullable();
            $table->integer('client_id')->nullable();
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
        Schema::dropIfExists('temp_item_rates');
    }
}
