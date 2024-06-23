<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempClientNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_client_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('user_id');
            $table->text('note')->nullable();
            $table->string('file', 191)->nullable();
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
        Schema::dropIfExists('temp_client_notes');
    }
}
