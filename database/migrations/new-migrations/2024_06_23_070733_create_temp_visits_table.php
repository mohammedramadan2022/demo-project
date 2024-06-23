<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_visits', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->date('visit_date');
            $table->text('notes')->nullable();
            $table->integer('client_id');
            $table->integer('employee_id');
            $table->boolean('status')->default(0);
            $table->integer('shop_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('temp_visits');
    }
}
