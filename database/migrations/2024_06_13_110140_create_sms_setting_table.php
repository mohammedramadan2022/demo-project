<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_setting', function (Blueprint $table) {
            $table->integer('shop_id')->primary();
            $table->integer('smsPackage');
            $table->string('SMSPass', 191);
            $table->string('sms_title', 15);
            $table->string('sms_welcome', 500);
            $table->integer('welcome_status');
            $table->integer('sms_count');
            $table->string('sms_phone', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sms_setting');
    }
}
