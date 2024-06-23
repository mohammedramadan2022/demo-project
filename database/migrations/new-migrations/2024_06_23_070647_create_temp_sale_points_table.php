<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSalePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_sale_points', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('point_name', 191);
            $table->decimal('money_point', 20, 4)->default(0.0000);
            $table->timestamp('add_date')->useCurrent();
            $table->integer('store_id')->default(0);
            $table->integer('point_type')->default(1)->comment("1 for salepoint 2 for visa account");
            $table->integer('shop_id')->index('shop_id');
            $table->string('currency_text', 191)->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('mobile_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_sale_points');
    }
}
