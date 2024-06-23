<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_contacts', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('shop_id');
            $table->string('facebook', 191)->nullable();
            $table->string('twitter', 191)->nullable();
            $table->string('instagram', 191)->nullable();
            $table->string('google', 191)->nullable();
            $table->string('youtube', 191)->nullable();
            $table->string('snap_chat', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_contacts');
    }
}
