<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemSerialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_serials', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_id')->index('item_id');
            $table->string('serial', 191);
            $table->tinyInteger('sold');
            $table->integer('income_id');
            $table->integer('sale_id');
            $table->integer('shop_id')->index('shop_id');
            $table->integer('add_user');
            $table->timestamp('add_date')->useCurrent();
            $table->date('sold_date')->nullable();
            $table->integer('store_id')->default(0);
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_serials');
    }
}
