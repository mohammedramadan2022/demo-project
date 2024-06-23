<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempCarEngineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_car_engine', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_id')->nullable();
            $table->integer('car_id')->default(0)->comment("0 for no car");
            $table->integer('store_id')->nullable();
            $table->string('type', 100)->nullable();
            $table->integer('sub_type')->nullable();
            $table->integer('year')->nullable();
            $table->string('size', 191)->nullable();
            $table->tinyInteger('status')->nullable()->comment("1 for country_make === 2 for pack === 3 for corrupted === 4 for insurance");
            $table->string('mechanic_name', 191)->nullable();
            $table->date('pack_date')->nullable();
            $table->date('insurance_start')->nullable();
            $table->date('insurance_end')->nullable();
            $table->integer('shop_id');
            $table->timestamps();
            $table->integer('bill_id')->default(0);
            $table->tinyInteger('cylinder_')->default(3);
            $table->string('engine_types', 100)->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_car_engine');
    }
}
