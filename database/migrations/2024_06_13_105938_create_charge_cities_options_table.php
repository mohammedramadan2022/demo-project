<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargeCitiesOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charge_cities_options', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('city_id')->nullable();
            $table->integer('delivery')->nullable();
            $table->integer('epay')->nullable();
            $table->integer('bank')->nullable();
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
        Schema::dropIfExists('charge_cities_options');
    }
}
