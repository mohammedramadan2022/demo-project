<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempExceptionalVisitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_exceptional_visitation', function (Blueprint $table) {
            $table->integer('client_id');
            $table->date('date');
            $table->integer('id')->primary();
            $table->integer('line_id');
            $table->integer('shop_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_exceptional_visitation');
    }
}
