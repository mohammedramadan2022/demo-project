<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempMaintainanceOrdersStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_maintainance_orders_status', function (Blueprint $table) {
            $table->boolean('hold')->default(0);
            $table->integer('id')->primary();
            $table->string('name', 191);
            $table->integer('shop_id')->default(1);
            $table->integer('status');
            $table->integer('view_order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_maintainance_orders_status');
    }
}
