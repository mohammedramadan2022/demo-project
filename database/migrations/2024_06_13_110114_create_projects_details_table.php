<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_details', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('id')->primary();
            $table->integer('item_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('sale_price')->nullable();
            $table->integer('shop_id')->nullable();
            $table->integer('store_id')->nullable();
            $table->integer('unit_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_details');
    }
}
