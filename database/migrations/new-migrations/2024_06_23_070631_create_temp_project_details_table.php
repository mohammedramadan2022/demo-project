<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempProjectDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_project_details', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_id');
            $table->integer('project_id');
            $table->string('item_name', 191);
            $table->integer('unit_id');
            $table->decimal('quantity', 20, 4);
            $table->decimal('quantity_after', 20, 4);
            $table->decimal('price', 20, 4);
            $table->decimal('basic_price', 20, 4);
            $table->integer('shop_id');
            $table->integer('store_id');
            $table->decimal('quantity_unit', 20, 4);
            $table->dateTime('add_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_project_details');
    }
}
