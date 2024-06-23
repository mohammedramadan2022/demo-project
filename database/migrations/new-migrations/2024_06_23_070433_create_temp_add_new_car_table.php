<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempAddNewCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_add_new_car', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('type', 100)->nullable();
            $table->integer('sub_type')->nullable();
            $table->integer('year')->nullable();
            $table->string('color', 100)->nullable();
            $table->date('purchase_date')->nullable();
            $table->double('price')->default(0);
            $table->string('barcode', 191)->nullable();
            $table->string('seller_name', 191)->nullable();
            $table->string('notes', 191)->nullable();
            $table->integer('shop_id');
            $table->timestamps();
            $table->tinyInteger('cylinder')->default(3);
            $table->tinyInteger('store_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_add_new_car');
    }
}
