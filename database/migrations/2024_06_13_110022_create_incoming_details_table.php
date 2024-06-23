<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming_details', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('bill_id');
            $table->string('item_id', 191);
            $table->integer('items_id');
            $table->string('about_item', 191);
            $table->integer('supplier_id');
            $table->decimal('quantity', 20, 4)->nullable();
            $table->string('unit', 20);
            $table->decimal('price', 20, 4)->nullable();
            $table->decimal('sale_price', 20, 4)->nullable();
            $table->decimal('ratio_input_incom', 20, 4)->nullable();
            $table->decimal('basic_price_in', 20, 4)->nullable();
            $table->decimal('total', 20, 4)->nullable();
            $table->date('expire_date')->nullable();
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            $table->integer('shop_id');
            $table->decimal('glass_height', 10, 2)->nullable();
            $table->decimal('glass_width', 10, 2)->nullable();
            $table->integer('glass_number')->nullable();
            $table->text('notes')->nullable();
            $table->decimal('main_qty', 10, 4)->default(0.0000);
            $table->decimal('disc_qty', 10, 4)->default(0.0000);
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
        Schema::dropIfExists('incoming_details');
    }
}
