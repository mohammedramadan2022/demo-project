<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempTypesCookingSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_types_cooking_sales', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('sale_details_id');
            $table->integer('type_id');
            $table->integer('item_id');
            $table->integer('shop_id');
            $table->integer('item_row_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_types_cooking_sales');
    }
}
