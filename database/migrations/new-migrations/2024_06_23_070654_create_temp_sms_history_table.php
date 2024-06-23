<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSmsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_sms_history', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('shop_id');
            $table->string('title', 15);
            $table->string('message', 500);
            $table->integer('sms_status');
            $table->string('receive_phone', 15);
            $table->integer('client_id');
            $table->timestamp('send_date')->useCurrent();
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_sms_history');
    }
}
