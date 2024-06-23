<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_cars', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('car_type', 100);
            $table->string('car_color', 100);
            $table->string('car_model', 100);
            $table->string('plate_number', 40);
            $table->string('structure_no', 40);
            $table->string('client_id', 100);
            $table->timestamps();
            $table->integer('shop_id');
            $table->string('avatar', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_cars');
    }
}
