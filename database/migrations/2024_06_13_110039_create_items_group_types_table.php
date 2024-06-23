<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsGroupTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_group_types', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_group_id')->nullable();
            $table->integer('filed_type')->nullable();
            $table->integer('type_id')->nullable();
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
        Schema::dropIfExists('items_group_types');
    }
}
