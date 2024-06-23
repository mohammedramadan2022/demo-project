<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempTicketRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_ticket_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('message');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('ticket_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_ticket_replies');
    }
}
