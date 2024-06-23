<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleBackInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_back_invoice', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->dateTime('date_process');
            $table->dateTime('sale_date')->index('sale_date');
            $table->integer('store')->nullable()->index('store');
            $table->decimal('total_price', 20, 4);
            $table->decimal('discount', 10, 4);
            $table->tinyInteger('discount_type')->comment("0 %");
            $table->decimal('net_price', 20, 4);
            $table->decimal('boll_per', 10, 4)->default(0.0000);
            $table->integer('sales_man')->default(0)->index('sales_man');
            $table->decimal('payment', 20, 4);
            $table->decimal('bil_payment', 20, 4);
            $table->decimal('rest', 20, 4)->default(0.0000);
            $table->integer('client_id')->nullable()->index('client_id');
            $table->decimal('clientOldBalance', 20, 4)->default(0.0000);
            $table->boolean('pay_stat')->default(1);
            $table->decimal('balance', 20, 4);
            $table->date('pay_date')->nullable();
            $table->integer('add_user');
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            $table->boolean('pay_process')->default(1);
            $table->integer('shop_id')->index('shop_id');
            $table->integer('bill_no')->default(0)->index('bill_no');
            $table->string('notes', 191);
            $table->dateTime('notify_time')->nullable();
            $table->boolean('notify_alert')->default(0);
            $table->integer('cooking')->default(0);
            $table->decimal('insatllments_add', 10, 0)->default(0);
            $table->integer('sale_id')->nullable()->index('sale_id');
            $table->string('local_bill_no', 191)->nullable();
            $table->decimal('shipping_fee', 10, 4)->default(0.0000);
            $table->string('unique_row')->nullable()->comment("shop_id-client_id-sale_date-net_price");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_back_invoice');
    }
}
