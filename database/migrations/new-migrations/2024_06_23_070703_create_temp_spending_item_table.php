<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSpendingItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_spending_item', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 50);
            $table->integer('linkitem')->default(0)->comment("0genearl 1percetage 2service3transport ");
            $table->integer('type')->default(0)->comment("0 spend 1 import");
            $table->integer('shop_id');
            $table->integer('mobile_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_spending_item');
    }
}
