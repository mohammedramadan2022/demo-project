<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsProviderAdditionalParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_provider_additional_params', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sms_provider_id')->index('sms_provider_additional_params_sms_provider_id_foreign');
            $table->string('parameter', 191);
            $table->string('value', 191)->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('group_id')->nullable();
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
        Schema::dropIfExists('sms_provider_additional_params');
    }
}
