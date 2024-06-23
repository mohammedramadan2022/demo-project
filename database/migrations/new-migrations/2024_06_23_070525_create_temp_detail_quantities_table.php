<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempDetailQuantitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_detail_quantities', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('shop_id');
            $table->integer('bill_id');
            $table->integer('item_id');
            $table->decimal('quantity', 10, 4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_detail_quantities');
    }
}
