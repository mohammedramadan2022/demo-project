<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempWoocommerceSecretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_woocommerce_secrets', function (Blueprint $table) {
            $table->boolean('auto_update_quantity')->default(1);
            $table->string('consumerKey', 191);
            $table->string('consumerSecret', 191);
            $table->timestamp('created_at')->useCurrent();
            $table->integer('id')->primary();
            $table->string('link', 191);
            $table->integer('shop_id');
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_woocommerce_secrets');
    }
}
