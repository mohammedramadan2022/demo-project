<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_transaction', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->timestamp('tansaction_date')->useCurrent();
            $table->dateTime('action_date')->index('action_date');
            $table->string('item_name', 191);
            $table->integer('item_id')->index('item_id');
            $table->decimal('price', 20, 4)->nullable();
            $table->integer('type')->index('type');
            $table->decimal('quantity', 20, 4)->nullable();
            $table->decimal('new_quantity', 20, 4)->nullable();
            $table->decimal('old_quantity', 20, 4)->nullable();
            $table->decimal('remain_quantity', 20, 4)->nullable();
            $table->integer('incom_id');
            $table->integer('incom_return_id')->index('incom_return_id');
            $table->integer('sale_id')->index('sale_id');
            $table->integer('back_id')->index('back_id');
            $table->integer('problem_id');
            $table->integer('store_id')->default(0);
            $table->integer('store_from')->default(0)->index('store_from');
            $table->integer('store_to')->default(0)->index('store_to');
            $table->boolean('replaced')->default(0);
            $table->integer('supplier_id')->default(0);
            $table->text('notes')->nullable();
            $table->integer('manuf_order');
            $table->integer('order_no');
            $table->integer('user_id')->index('user_id');
            $table->integer('shop_id')->index('shop_id');
            $table->decimal('pay_price', 20, 4)->nullable();
            $table->integer('related_item_id')->default(0);
            $table->integer('project_id')->nullable();
            $table->decimal('unit_quantity', 10, 4)->default(1.0000);
            $table->integer('unit_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_transaction');
    }
}
