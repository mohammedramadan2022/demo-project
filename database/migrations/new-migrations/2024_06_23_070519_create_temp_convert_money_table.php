<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempConvertMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_convert_money', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('supplier_id');
            $table->integer('shop_id');
            $table->integer('order_no');
            $table->dateTime('date_convert');
            $table->decimal('total_money', 10, 2);
            $table->integer('user_id');
            $table->timestamp('add_date')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_convert_money');
    }
}
