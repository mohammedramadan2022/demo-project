<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempIncomingDetailsReturnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_incoming_details_return', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('bill_id');
            $table->string('item_id', 191);
            $table->integer('items_id');
            $table->integer('supplier_id');
            $table->decimal('quantity', 20, 4)->nullable();
            $table->string('unit', 20);
            $table->decimal('price', 20, 4)->nullable();
            $table->decimal('sale_price', 20, 4)->nullable();
            $table->decimal('total', 20, 4)->nullable();
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            $table->integer('shop_id');
            $table->date('expire_date')->nullable();
            $table->decimal('ratio_input_incom', 10, 4);
            $table->decimal('basic_price_in', 10, 4);
            $table->integer('item_vat_state')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_incoming_details_return');
    }
}
