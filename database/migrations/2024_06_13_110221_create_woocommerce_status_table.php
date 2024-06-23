<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWoocommerceStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('woocommerce_status', function (Blueprint $table) {
            $table->timestamp('created_at')->useCurrent();
            $table->integer('equal_in_albadr');
            $table->integer('id')->primary();
            $table->integer('shop_id');
            $table->timestamp('updated_at')->useCurrent();
            $table->string('woocommerce_status', 191);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('woocommerce_status');
    }
}
