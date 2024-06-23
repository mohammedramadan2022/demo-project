<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempWoocommerceItemTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_woocommerce_item_types', function (Blueprint $table) {
            $table->timestamp('created_at')->useCurrent();
            $table->bigInteger('id')->primary();
            $table->bigInteger('item_type_id');
            $table->tinyInteger('scope');
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
        Schema::dropIfExists('temp_woocommerce_item_types');
    }
}
