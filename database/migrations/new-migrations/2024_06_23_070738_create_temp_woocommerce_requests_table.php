<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempWoocommerceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_woocommerce_requests', function (Blueprint $table) {
            $table->timestamp('created_at')->useCurrent();
            $table->integer('id')->primary();
            $table->bigInteger('request_id');
            $table->integer('scope')->default(0);
            $table->integer('shop_id');
            $table->string('status', 191)->default('pending');
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
        Schema::dropIfExists('temp_woocommerce_requests');
    }
}
