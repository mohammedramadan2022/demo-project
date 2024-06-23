<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempLogSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_log_system', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('user_id');
            $table->dateTime('date_event')->nullable();
            $table->string('event', 191)->nullable();
            $table->integer('shop_id')->index('shop_id');
            $table->integer('bill_id')->nullable();
            $table->string('type', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_log_system');
    }
}
