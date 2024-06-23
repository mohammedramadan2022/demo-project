<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id')->index('tickets_client_id_foreign');
            $table->unsignedInteger('ticket_reason_id')->index('tickets_ticket_reason_id_foreign');
            $table->unsignedInteger('ticket_type_id')->index('tickets_ticket_type_id_foreign');
            $table->unsignedInteger('ticket_status_id')->index('tickets_ticket_status_id_foreign');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->unsignedInteger('employee_id')->index('tickets_employee_id_foreign');
            $table->unsignedInteger('shop_id')->index('shop_id');
            $table->string('email', 191)->nullable();
            $table->string('title', 191)->nullable();
            $table->tinyInteger('type')->nullable();
            $table->string('phone', 191)->nullable();
            $table->integer('ticket_id')->nullable();
            $table->string('name', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
