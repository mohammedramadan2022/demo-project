<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSparePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_spare_parts', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('car_id')->nullable()->comment("0 for store");
            $table->integer('item_id')->nullable();
            $table->double('price')->default(0);
            $table->integer('store_id')->nullable();
            $table->integer('shop_id');
            $table->timestamps();
            $table->integer('bill_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_spare_parts');
    }
}
