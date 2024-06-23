<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempLineClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_line_clients', function (Blueprint $table) {
            $table->integer('client_id');
            $table->boolean('fri')->default(0);
            $table->integer('id')->primary();
            $table->integer('line_id');
            $table->boolean('mon')->default(0);
            $table->boolean('sat')->default(0);
            $table->integer('shop_id');
            $table->boolean('sun')->default(0);
            $table->boolean('thu')->default(0);
            $table->boolean('tue')->default(0);
            $table->boolean('wed')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_line_clients');
    }
}
