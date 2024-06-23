<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming_bill', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('incom_id');
            $table->integer('bill_no');
            $table->date('incoming_date')->index('incoming_date');
            $table->timestamp('add_date')->useCurrent();
            $table->integer('supplier_id')->index('supplier_id');
            $table->string('supplier_bill_no', 100)->nullable()->index('supplier_bill_no');
            $table->decimal('total_bill', 20, 4)->nullable();
            $table->decimal('discount', 20, 4)->nullable();
            $table->tinyInteger('discount_type')->comment("0 %");
            $table->decimal('net_price', 20, 4)->nullable();
            $table->decimal('payment', 20, 4)->default(0.0000);
            $table->decimal('supplier_balance', 20, 4)->nullable();
            $table->integer('pay_stat')->default(1);
            $table->integer('mony_safe');
            $table->integer('add_user')->index('add_user');
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            $table->integer('shop_id')->index('shop_id');
            $table->integer('store_id')->default(0)->index('store_id');
            $table->text('notes')->nullable();
            $table->string('reference_image', 191)->nullable();
            $table->integer('currency_id')->nullable();
            $table->decimal('currency_value', 10, 4)->nullable();
            $table->decimal('vat_discount', 10, 4)->default(0.0000);
            $table->integer('vat_discount_type')->default(0);
            $table->decimal('vat_discount_value', 10, 4)->default(0.0000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incoming_bill');
    }
}
