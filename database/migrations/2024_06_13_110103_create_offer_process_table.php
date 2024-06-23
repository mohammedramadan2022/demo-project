<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_process', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->dateTime('date_process')->nullable();
            $table->integer('bill_no')->nullable();
            $table->dateTime('sale_date')->nullable();
            $table->decimal('total_price', 10, 4)->nullable();
            $table->decimal('discount', 10, 4)->nullable();
            $table->decimal('net_price', 10, 4)->nullable();
            $table->decimal('payment', 10, 4)->nullable();
            $table->string('client_id', 191)->nullable();
            $table->tinyInteger('pay_stat')->nullable();
            $table->decimal('balance', 10, 4)->nullable();
            $table->date('pay_date')->nullable();
            $table->integer('add_user')->nullable();
            $table->integer('edit_user')->nullable();
            $table->timestamp('edit_date')->useCurrent();
            $table->tinyInteger('pay_process')->nullable();
            $table->integer('during')->nullable();
            $table->integer('shop_id');
            $table->integer('sale_point_id')->nullable();
            $table->text('notes')->nullable();
            $table->integer('discount_type')->default(1);
            $table->integer('bill_id')->default(0);
            $table->string('email', 191)->nullable();
            $table->string('contact_person', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_process');
    }
}
