<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('city_name', 191);
            $table->integer('city_up')->default(0);
            $table->boolean('not_active')->default(0);
            $table->decimal('Incentive', 10, 4)->default(0.0000);
            $table->integer('shop_id');
            $table->integer('add_user');
            $table->dateTime('add_date');
            $table->integer('edit_user');
            $table->dateTime('edit_date');
            $table->decimal('lon', 11, 8)->nullable();
            $table->decimal('lat', 11, 8)->nullable();
            $table->string('name_en', 100)->nullable();
            $table->decimal('fee', 10, 4)->default(0.0000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
