<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempGiftHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_gift_history', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('client_id')->nullable();
            $table->integer('bill_id')->nullable();
            $table->integer('gift_balance')->nullable();
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
        Schema::dropIfExists('temp_gift_history');
    }
}
