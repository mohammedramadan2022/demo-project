<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSaleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_sale_details', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('sale_id')->index('sale_id');
            $table->string('item_name', 191)->index('item_name');
            $table->integer('items_id')->index('items_id');
            $table->text('about');
            $table->integer('unit')->index('unit');
            $table->decimal('quantity', 20, 4)->nullable();
            $table->decimal('quant_after', 20, 4)->nullable();
            $table->decimal('price', 20, 4)->nullable();
            $table->decimal('basic_price', 20, 4)->nullable();
            $table->decimal('sale_ratio', 20, 4)->nullable();
            $table->decimal('total_price', 20, 4)->nullable();
            $table->decimal('pay_price', 20, 4)->nullable();
            $table->decimal('av_pay_price', 20, 4)->nullable();
            $table->decimal('ac_pay_price', 20, 4)->nullable();
            $table->decimal('bolla', 20, 4)->nullable();
            $table->integer('sale_man')->default(1);
            $table->integer('sale_point')->index('sale_point');
            $table->integer('store_id')->nullable()->index('store_id');
            $table->dateTime('date_sale')->nullable();
            $table->integer('isservice')->default(0);
            $table->boolean('notify_alert')->default(0);
            $table->dateTime('notify_time')->nullable();
            $table->boolean('record_type')->default(1);
            $table->string('label_from', 191)->nullable();
            $table->string('label_to', 191)->nullable();
            $table->decimal('pricePercentage', 20, 4)->nullable();
            $table->string('item_serial', 30)->nullable();
            $table->integer('add_user')->index('add_user');
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            $table->integer('shop_id')->index('shop_id');
            $table->integer('duration_type')->nullable()->comment("0 -> by hour, 1 -> by day");
            $table->decimal('duration', 20, 2)->nullable();
            $table->dateTime('from_date')->nullable();
            $table->dateTime('to_date')->nullable();
            $table->integer('item_vat_state')->default(1);
            $table->text('item_notes')->nullable();
            $table->integer('color_id')->nullable();
            $table->integer('size_id')->nullable();
            $table->text('cards')->nullable();
            $table->integer('spare_id')->nullable();
            $table->integer('car_id')->nullable();
            $table->decimal('glass_height', 10, 2)->nullable();
            $table->decimal('glass_width', 10, 2)->nullable();
            $table->integer('glass_number')->nullable();
            $table->integer('sales_row_id')->nullable();
            $table->integer('offer_id')->nullable();
            $table->string('offer_text', 191)->nullable();
            $table->integer('offer_type')->nullable();
            $table->boolean('ratio_type')->default(0);
            $table->decimal('main_qty', 10, 4)->default(0.0000);
            $table->decimal('disc_qty', 10, 4)->default(0.0000);
            $table->decimal('delivered_quantity', 20, 4)->default(0.0000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_sale_details');
    }
}
