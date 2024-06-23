<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempWoocommerceClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_woocommerce_clients', function (Blueprint $table) {
            $table->integer('client_id');
            $table->timestamp('created_at')->useCurrent();
            $table->integer('id')->primary();
            $table->string('role', 191);
            $table->integer('scope')->default(0);
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
        Schema::dropIfExists('temp_woocommerce_clients');
    }
}
