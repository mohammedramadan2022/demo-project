<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempMultiSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_multi_supplier', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_id')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->integer('shop_id')->index('shop_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_multi_supplier');
    }
}
