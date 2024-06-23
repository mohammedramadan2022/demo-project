<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSupplierOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_supplier_order_details', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('shop_id');
            $table->integer('item_id');
            $table->integer('supplier_order_id');
            $table->integer('quantity');
            $table->integer('unit_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_supplier_order_details');
    }
}
