<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_stores', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('store_name', 191);
            $table->integer('man_id')->default(0);
            $table->boolean('for_damaged')->default(0)->index('for_damaged')->comment("التوالف");
            $table->integer('shop_id')->index('shop_id');
            $table->string('img', 191)->nullable();
            $table->tinyInteger('stop_flag')->nullable();
            $table->integer('mobile_id')->nullable()->index('mobile_id');
            $table->string('tax_number', 50)->nullable();
            $table->string('trade_number', 50)->nullable();
            $table->string('address', 191)->nullable();
            $table->text('bill_header')->nullable();
            $table->text('message_bill')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_stores');
    }
}
