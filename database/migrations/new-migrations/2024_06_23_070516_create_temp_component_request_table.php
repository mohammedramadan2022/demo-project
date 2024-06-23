<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempComponentRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_component_request', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('component_id');
            $table->integer('request_id');
            $table->enum('status', ['good', 'broken', 'not_available']);
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
        Schema::dropIfExists('temp_component_request');
    }
}
