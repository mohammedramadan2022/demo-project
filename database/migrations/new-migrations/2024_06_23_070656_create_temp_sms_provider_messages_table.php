<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSmsProviderMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_sms_provider_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sms_provider_id')->index('sms_provider_messages_sms_provider_id_foreign');
            $table->text('message')->nullable();
            $table->string('client_number', 191);
            $table->integer('user_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->tinyInteger('status');
            $table->text('status_code');
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('temp_sms_provider_messages');
    }
}
