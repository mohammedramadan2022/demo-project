<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempGoogleCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_google_cities', function (Blueprint $table) {
            $table->string('city_name_ar', 200);
            $table->string('city_name_en', 200);
            $table->integer('governorate_id');
            $table->integer('id')->primary();
            $table->json('bounds')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_google_cities');
    }
}
