<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsAddHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills_add_history', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('bill_id');
            $table->integer('addition_id');
            $table->decimal('addition_value', 10, 4);
            $table->integer('shop_id');
            $table->integer('type')->default(1);
            $table->integer('request_id')->nullable();
            $table->integer('spend_id')->nullable();
            $table->integer('bill_add')->default(15);
            $table->integer('add_type')->default(0);
            $table->integer('offer_sales_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills_add_history');
    }
}
