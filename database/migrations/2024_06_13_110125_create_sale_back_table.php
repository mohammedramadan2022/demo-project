<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleBackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_back', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->dateTime('date_back')->nullable();
            $table->string('item_name', 191);
            $table->integer('items_id')->index('items_id');
            $table->integer('unit')->index('unit');
            $table->decimal('quantity', 10, 4);
            $table->decimal('price', 20, 4);
            $table->decimal('pay_price', 10, 4);
            $table->decimal('sale_ratio', 10, 4)->default(0.0000);
            $table->decimal('basic_price', 10, 4)->default(0.0000);
            $table->integer('client_id')->nullable()->index('client_id');
            $table->integer('bill_id')->index('bill_id');
            $table->integer('back_id')->index('back_id');
            $table->boolean('pay_stat')->default(1);
            $table->integer('sale_point')->index('sale_point');
            $table->integer('add_user')->index('add_user');
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            $table->integer('shop_id')->index('shop_id');
            $table->integer('item_vat_state')->default(0)->index('item_vat_state');
            $table->string('item_serial', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_back');
    }
}
