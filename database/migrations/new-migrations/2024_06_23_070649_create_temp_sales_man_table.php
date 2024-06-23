<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSalesManTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_sales_man', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('sales_name', 191);
            $table->boolean('hide')->default(0)->index('hide');
            $table->integer('shop_id')->index('shop_id');
            $table->integer('client_group_id')->default(0)->index('client_group_id');
            $table->integer('client_store_id')->default(-1);
            $table->string('responsible', 191);
            $table->string('address', 191);
            $table->string('phone', 191);
            $table->string('email', 191);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_sales_man');
    }
}
