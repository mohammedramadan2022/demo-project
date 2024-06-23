<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegativeVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negative_visits', function (Blueprint $table) {
            $table->unsignedInteger('branch_id')->nullable();
            $table->unsignedInteger('client_id');
            $table->timestamps();
            $table->increments('id');
            $table->text('notes')->nullable();
            $table->unsignedInteger('reason_id');
            $table->unsignedInteger('shop_id');
            $table->unsignedInteger('user_id')->nullable();
            $table->date('visie_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('negative_visits');
    }
}
