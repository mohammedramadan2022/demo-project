<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_details', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->timestamps();
            $table->integer('request_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->decimal('quantity', 10, 4)->nullable();
            $table->decimal('price', 10, 4)->nullable();
            $table->integer('shop_id');
            $table->text('notes')->nullable();
            $table->integer('size_id')->nullable();
            $table->integer('color_id')->nullable();
            $table->decimal('outgoing_done', 10, 4)->default(0.0000);
            $table->string('order_name', 191)->nullable();
            $table->integer('unit_id')->nullable();
            $table->integer('coupon_id')->nullable();
            $table->decimal('sale_price', 10, 4)->nullable();
            $table->decimal('discount_percent', 10, 2)->nullable();
            $table->text('item_notes')->nullable();
            $table->integer('status')->default(1);
            $table->integer('cashier_alert')->default(0);
            $table->integer('card_type')->default(0);
            $table->decimal('pay_price', 10, 4)->nullable();
            $table->timestamp('stop_time')->nullable();
            $table->decimal('item_fee', 10, 4)->default(0.0000);
            $table->boolean('print_type')->default(0);
            $table->decimal('print_qty', 10, 0)->nullable();
            $table->integer('list_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_details');
    }
}
