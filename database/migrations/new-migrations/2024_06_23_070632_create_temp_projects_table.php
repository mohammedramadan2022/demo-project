<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_projects', function (Blueprint $table) {
            $table->timestamps();
            $table->string('description', 100)->nullable();
            $table->integer('id')->primary();
            $table->integer('point_id')->nullable();
            $table->integer('previous_point_value')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('sale_man_id')->nullable();
            $table->integer('shop_id')->nullable();
            $table->integer('status')->nullable();
            $table->integer('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_projects');
    }
}
