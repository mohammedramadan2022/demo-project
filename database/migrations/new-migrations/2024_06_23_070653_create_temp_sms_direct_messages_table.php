<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSmsDirectMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_sms_direct_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message_type', 191);
            $table->text('message')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('temp_sms_direct_messages');
    }
}
