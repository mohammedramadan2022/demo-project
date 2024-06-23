<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempChargeCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_charge_cities', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('region_id')->nullable();
            $table->string('name_ar', 30)->nullable();
            $table->string('name_en', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_charge_cities');
    }
}
