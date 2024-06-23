<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_alerts', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('alert_name', 191)->nullable();
            $table->string('para', 191)->nullable();
            $table->date('date')->nullable();
            $table->integer('add_user')->index('add_user');
            $table->integer('edit_user')->nullable();
            $table->integer('shop_id')->index('shop_id');
            $table->integer('status')->default(0);
            $table->integer('user_id')->nullable();
            $table->string('client_id', 191)->nullable();
            $table->string('info1', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_alerts');
    }
}
