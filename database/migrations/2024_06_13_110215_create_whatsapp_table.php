<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhatsappTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whatsapp', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('shop_id');
            $table->text('message')->nullable();
            $table->string('endpoint', 200)->nullable();
            $table->string('type', 30)->default('text');
            $table->string('username', 100)->nullable();
            $table->string('password', 100)->nullable();
            $table->string('token', 100)->nullable();
            $table->string('session_uuid', 100)->nullable();
            $table->smallInteger('diff_hours')->default(0);
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
        Schema::dropIfExists('whatsapp');
    }
}
