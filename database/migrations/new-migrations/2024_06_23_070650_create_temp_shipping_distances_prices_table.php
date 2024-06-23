<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempShippingDistancesPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_shipping_distances_prices', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('shop_id');
            $table->integer('km_from')->nullable();
            $table->integer('km_to')->nullable();
            $table->integer('price_per_kilo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_shipping_distances_prices');
    }
}
