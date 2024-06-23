<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempRequestCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_request_coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('coupon_code', 191);
            $table->decimal('discount_value', 10, 4);
            $table->boolean('discount_type')->default(0)->comment("0 for percent, 1 for money");
            $table->unsignedInteger('shop_id');
            $table->boolean('is_valid')->default(0);
            $table->date('expire_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_request_coupons');
    }
}
