<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSmsProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_sms_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name', 191);
            $table->string('api_url', 191)->unique('sms_providers_api_url_unique');
            $table->string('http_method', 191);
            $table->string('destination_attr', 191);
            $table->string('message_attr', 191);
            $table->boolean('unicode')->default(0);
            $table->string('success_code', 191);
            $table->tinyInteger('default');
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
        Schema::dropIfExists('temp_sms_providers');
    }
}
