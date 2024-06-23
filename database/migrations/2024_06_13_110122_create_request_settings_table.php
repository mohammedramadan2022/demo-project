<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('min_purchase', 10, 4);
            $table->decimal('max_charge', 10, 4);
            $table->decimal('fee', 10, 4);
            $table->boolean('fee_type')->default(1)->comment("0 for percent, 1 for money");
            $table->unsignedInteger('shop_id');
            $table->decimal('back_percent', 10, 2)->default(0.00);
            $table->integer('max_cards')->nullable();
            $table->integer('max_items')->nullable();
            $table->tinyInteger('epay')->nullable();
            $table->tinyInteger('bank')->nullable();
            $table->tinyInteger('delivery')->nullable();
            $table->string('special_ad1', 191)->nullable();
            $table->string('special_ad2', 191)->nullable();
            $table->decimal('lat', 12, 9)->nullable();
            $table->decimal('lon', 12, 9)->nullable();
            $table->text('banks_info')->nullable();
            $table->text('reference')->nullable();
            $table->integer('apply_fee')->default(0);
            $table->integer('apply_vat')->default(0);
            $table->string('manuf_link')->nullable();
            $table->tinyInteger('from_shop')->nullable();
            $table->tinyInteger('packing')->nullable();
            $table->integer('ignore_quantity')->default(0);
            $table->integer('store_type')->nullable();
            $table->tinyInteger('store_order')->nullable();
            $table->tinyInteger('bill_with_order')->nullable();
            $table->tinyInteger('congrats_card')->nullable();
            $table->tinyInteger('maintenance')->nullable();
            $table->tinyInteger('manufacturing')->nullable();
            $table->boolean('dis_req_quantity')->default(0);
            $table->boolean('login')->default(0);
            $table->string('enabled_epay', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_settings');
    }
}
