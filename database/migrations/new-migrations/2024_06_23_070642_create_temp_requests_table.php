<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_requests', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->timestamps();
            $table->integer('client_id')->nullable();
            $table->integer('shop_id')->index('shop_id');
            $table->decimal('total', 10, 4)->default(0.0000);
            $table->integer('status')->nullable()->index('status');
            $table->integer('no_bill')->nullable();
            $table->decimal('lon', 11, 8)->nullable();
            $table->decimal('lat', 11, 8)->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('order_no')->nullable();
            $table->date('delivery_date')->nullable();
            $table->decimal('fee', 10, 4)->nullable();
            $table->integer('fee_type')->nullable();
            $table->decimal('discount', 10, 4)->default(0.0000);
            $table->decimal('net', 10, 4)->default(0.0000);
            $table->text('feedback')->nullable();
            $table->string('address', 191)->nullable();
            $table->integer('type');
            $table->decimal('advance', 10, 4)->default(0.0000);
            $table->decimal('rest', 10, 4);
            $table->boolean('is_confirmed')->default(0);
            $table->integer('sales_man')->nullable();
            $table->integer('payment_type')->nullable();
            $table->string('fort_id', 100)->nullable();
            $table->string('client_name', 100)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('mobile', 25)->nullable();
            $table->text('feedback_response')->nullable();
            $table->string('trans_img', 100)->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('coupon_id')->nullable();
            $table->integer('discount_type')->default(1);
            $table->integer('update_status')->default(0);
            $table->integer('bill_id')->default(0);
            $table->integer('cashier_alert')->default(0);
            $table->integer('order_type')->default(1);
            $table->text('notes')->nullable();
            $table->string('device_status')->nullable();
            $table->integer('store_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('damage', 200)->nullable();
            $table->decimal('profit', 10, 4)->nullable();
            $table->string('car_id', 200)->nullable();
            $table->decimal('payment', 20, 4)->default(0.0000);
            $table->string('serial')->nullable();
            $table->string('image')->nullable();
            $table->integer('warranty')->default(0);
            $table->boolean('guarantee')->default(0);
            $table->decimal('total_fees', 10, 4)->default(0.0000);
            $table->string('app_device', 20)->nullable();
            $table->integer('sale_point_id')->default(0);
            $table->integer('network_id')->default(0);
            $table->decimal('network_payment', 10, 4)->default(0.0000);
            $table->boolean('network_only')->default(0);
            $table->boolean('is_deleted')->default(0);
            $table->string('request_source', 191)->default('website');
            $table->tinyInteger('packing')->nullable();
            $table->boolean('is_maintenance')->default(0);
            $table->integer('project_id')->nullable();
            $table->tinyInteger('congrats_card')->nullable();
            $table->longText('congrats_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_requests');
    }
}
