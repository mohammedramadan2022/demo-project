<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSaleProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_sale_process', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('unique_row')->nullable()->unique('unique_row')->comment("shop_id-client_id-sale_date-net_price");
            $table->dateTime('date_process');
            $table->dateTime('sale_date')->index('sale_date_2');
            $table->integer('store')->nullable()->index('store');
            $table->integer('sale_point')->nullable();
            $table->decimal('total_price', 20, 4)->nullable();
            $table->decimal('discount', 20, 4)->nullable();
            $table->tinyInteger('discount_type')->comment("0 %");
            $table->decimal('net_price', 20, 4)->nullable();
            $table->decimal('boll_per', 20, 4)->nullable();
            $table->integer('sales_man')->default(0)->index('sales_man');
            $table->decimal('payment', 20, 4)->nullable();
            $table->decimal('bil_payment', 20, 4)->nullable();
            $table->decimal('rest', 20, 4)->nullable();
            $table->integer('client_id')->nullable()->index('client_id');
            $table->decimal('clientOldBalance', 20, 4)->nullable();
            $table->boolean('pay_stat')->default(1);
            $table->decimal('balance', 20, 4)->nullable();
            $table->date('pay_date')->nullable();
            $table->integer('add_user')->index('add_user');
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            $table->boolean('pay_process')->default(1);
            $table->integer('shop_id')->index('shop_id');
            $table->integer('bill_no')->default(0)->index('bill_no');
            $table->text('notes')->nullable();
            $table->dateTime('notify_time')->nullable();
            $table->boolean('notify_alert')->default(0);
            $table->integer('cooking')->default(0);
            $table->decimal('insatllments_add', 20, 0)->nullable();
            $table->decimal('StoreTransport', 20, 4)->nullable();
            $table->decimal('StoreServices', 20, 4)->nullable();
            $table->string('car_id', 100)->nullable();
            $table->integer('bill_type')->default(0);
            $table->integer('supplier_id')->default(0);
            $table->decimal('supplierOldBalance', 20, 4)->nullable();
            $table->date('due_date')->nullable();
            $table->text('notes_export')->nullable();
            $table->text('notes_export2')->nullable();
            $table->decimal('fee', 20, 4)->nullable();
            $table->integer('status')->nullable();
            $table->dateTime('done_date')->nullable();
            $table->integer('type')->default(0);
            $table->integer('fee_status')->default(0);
            $table->string('local_bill_no', 191)->nullable();
            $table->integer('server_status')->default(0);
            $table->integer('server_bill_no')->default(0);
            $table->tinyInteger('show_bill')->nullable();
            $table->integer('coupon_id')->nullable();
            $table->integer('city_id')->default(0);
            $table->string('bill_source', 100)->nullable();
            $table->decimal('vat_discount', 10, 4)->default(0.0000);
            $table->integer('vat_discount_type')->default(0);
            $table->decimal('vat_discount_value', 10, 4)->default(0.0000);
            $table->integer('bill_service_id')->default(0);
            $table->integer('delivery_man_id')->default(0);
            $table->timestamp('delivery_date')->nullable();
            $table->decimal('bill_service_value', 10, 4)->default(0.0000);
            $table->integer('delivery_option_id')->default(0);
            $table->integer('delivery_period_id')->default(0);
            $table->integer('order_ready')->default(1);
            $table->integer('action_type')->default(0)->index('action_type');
            $table->integer('charge_company_id')->default(0);
            $table->string('checked_type', 100)->nullable();
            $table->integer('request_id')->default(0);
            $table->decimal('shipping_payment', 10, 4)->default(0.0000);
            $table->decimal('shipping_fee', 10, 4)->default(0.0000);
            $table->string('shipping_no', 50)->nullable();
            $table->string('driver_name', 50)->nullable();
            $table->string('driver_phone', 50)->nullable();
            $table->date('booking_date')->nullable();
            $table->text('network_notes')->nullable();
            $table->boolean('is_commission_paid')->default(0);
            $table->boolean('is_item_delivery_enabled')->default(0);
            $table->boolean('illegal')->default(1);
            $table->double('cash_payment')->default(0);
            $table->integer('order_no')->nullable();
            $table->integer('network_point_id')->nullable();
            
            $table->unique(['sale_date', 'shop_id', 'client_id', 'net_price'], 'unique_invoice_row');
            $table->index(['sale_date', 'shop_id'], 'sale_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_sale_process');
    }
}
