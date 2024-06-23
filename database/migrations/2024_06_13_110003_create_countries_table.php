<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en', 200)->nullable();
            $table->string('name_ar', 200);
            $table->string('iso_alpha2', 2)->nullable();
            $table->string('iso_alpha3', 3)->nullable();
            $table->integer('iso_numeric')->nullable();
            $table->char('currency_code', 3)->nullable();
            $table->string('currency_name_en', 32)->nullable();
            $table->string('currency_name_ar', 32);
            $table->string('currency_subunit_name_ar', 32);
            $table->string('currency_subunit_name_en', 32);
            $table->string('currrency_symbol', 3)->nullable();
            $table->integer('Phonecode');
            $table->string('flag', 6)->nullable();
            $table->integer('orderflag')->default(0);
            $table->integer('ordering')->nullable();
            $table->integer('phone_length')->nullable();
            $table->boolean('sms_opt')->default(0);
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
        Schema::dropIfExists('countries');
    }
}
