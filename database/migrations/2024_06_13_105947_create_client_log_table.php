<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_log', function (Blueprint $table) {
            $table->string('client_city', 100)->nullable();
            $table->text('client_days')->nullable();
            $table->decimal('client_lat', 12, 9)->nullable();
            $table->decimal('client_lon', 12, 9)->nullable();
            $table->string('client_name', 60)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('delegate_city', 100)->nullable();
            $table->integer('delegate_id')->nullable();
            $table->integer('delegate_line')->nullable();
            $table->string('delegate_name', 60)->nullable();
            $table->integer('id')->primary();
            $table->string('regex_city')->nullable();
            $table->longText('request')->nullable();
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
        Schema::dropIfExists('client_log');
    }
}
