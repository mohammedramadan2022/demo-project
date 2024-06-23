<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWoocommerceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('woocommerce_items', function (Blueprint $table) {
            $table->timestamp('created_at')->useCurrent();
            $table->bigInteger('id')->primary();
            $table->bigInteger('item_id');
            $table->boolean('scope')->default(0);
            $table->integer('shop_id');
            $table->timestamp('updated_at')->useCurrent();
            $table->bigInteger('woocommerce_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('woocommerce_items');
    }
}
