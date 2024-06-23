<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempItemsExecutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_items_execution', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_id');
            $table->string('unit', 20);
            $table->integer('quantity');
            $table->decimal('total_price', 10, 0);
            $table->string('reason', 50);
            $table->integer('add_user');
            $table->timestamp('add_date')->useCurrent();
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
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
        Schema::dropIfExists('temp_items_execution');
    }
}
