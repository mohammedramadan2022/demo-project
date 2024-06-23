<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsProviderTrackActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_provider_track_activity', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sms_provider_id')->index('sms_provider_track_activity_sms_provider_id_foreign');
            $table->string('type', 191);
            $table->integer('message_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('sms_provider_track_activity');
    }
}
