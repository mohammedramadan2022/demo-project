<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyncSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sync_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('password', 191)->nullable();
            $table->integer('enable')->default(0);
            $table->integer('shop_id')->unique('shop_id');
            $table->string('url', 191)->nullable();
            $table->enum('type', ['server', 'client'])->nullable();
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
        Schema::dropIfExists('sync_settings');
    }
}
