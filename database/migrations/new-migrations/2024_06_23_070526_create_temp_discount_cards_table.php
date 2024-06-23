<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempDiscountCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_discount_cards', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_id')->index('item_id');
            $table->string('code');
            $table->date('end_date')->index('end_date');
            $table->integer('status')->default(1)->index('status');
            $table->integer('bill_id_used')->nullable();
            $table->date('date_of_used')->nullable();
            $table->integer('bill_id_sell')->nullable();
            $table->date('date_of_sell')->nullable();
            $table->integer('shop_id')->index('shop_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_discount_cards');
    }
}
