<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientGlassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_glasses', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('client_id');
            $table->integer('shop_id');
            $table->string('f_sph1', 10)->nullable();
            $table->string('n_sph1', 10)->nullable();
            $table->string('f_cyl1', 10)->nullable();
            $table->string('n_cyl1', 10)->nullable();
            $table->string('f_axis1', 10)->nullable();
            $table->string('n_axis1', 10)->nullable();
            $table->string('f_sph2', 10)->nullable();
            $table->string('n_sph2', 10)->nullable();
            $table->string('f_cyl2', 10)->nullable();
            $table->string('n_cyl2', 10)->nullable();
            $table->string('f_axis2', 10)->nullable();
            $table->string('n_axis2', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_glasses');
    }
}
