<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingBillReturnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming_bill_return', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->date('incoming_date')->index('incoming_date');
            $table->timestamp('add_date')->useCurrent();
            $table->integer('supplier_id')->index('supplier_id');
            $table->decimal('total_bill', 20, 4)->nullable();
            $table->decimal('discount', 20, 4)->nullable();
            $table->decimal('net_price', 20, 4)->nullable();
            $table->decimal('payment', 20, 4)->nullable();
            $table->decimal('supplier_balance', 20, 4)->nullable();
            $table->integer('pay_stat')->default(1);
            $table->integer('mony_safe');
            $table->integer('add_user')->index('add_user');
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            $table->integer('shop_id')->index('shop_id');
            $table->integer('incom_id')->index('incom_id');
            $table->tinyInteger('discount_type');
            $table->integer('store_id')->index('store_id');
            $table->text('notes')->nullable();
            $table->string('supplier_bill_no', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incoming_bill_return');
    }
}
