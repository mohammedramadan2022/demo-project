<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_details', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('sale_id')->nullable();
            $table->integer('item_id');
            $table->string('item_name', 191)->nullable();
            $table->text('about')->nullable();
            $table->string('unit', 20)->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('quant_after')->nullable();
            $table->decimal('price', 10, 4)->nullable();
            $table->decimal('discount', 10, 4)->default(0.0000);
            $table->boolean('discount_type')->default(0)->comment("0 is % | 1 is Pound");
            $table->boolean('operation')->default(0)->comment("0 is discount | 1 is add");
            $table->decimal('total_price', 10, 4)->nullable();
            $table->decimal('pay_price', 10, 4)->nullable();
            $table->decimal('bolla', 10, 4)->nullable();
            $table->integer('sale_man')->nullable();
            $table->integer('sale_point')->nullable();
            $table->dateTime('date_sale')->nullable();
            $table->tinyInteger('isservice')->nullable();
            $table->integer('add_user')->nullable();
            $table->integer('edit_user')->nullable();
            $table->timestamp('edit_date')->useCurrent();
            $table->integer('shop_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_details');
    }
}
