<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_ratings', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('order_id')->default(0);
            $table->integer('rate_service')->default(0);
            $table->integer('rate_delivery')->default(0);
            $table->integer('rate_order')->default(0);
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('temp_ratings');
    }
}
