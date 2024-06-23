<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentsListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installments_list', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('client_id');
            $table->decimal('installment_amount', 10, 4);
            $table->date('installment_date');
            $table->integer('bill_id');
            $table->boolean('installment_pay')->default(0);
            $table->date('pay_date')->nullable();
            $table->text('notes');
            $table->integer('shop_id');
            $table->integer('type')->default(0);
            $table->integer('supplier_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installments_list');
    }
}
