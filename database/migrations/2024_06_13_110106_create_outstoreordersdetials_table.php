<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutstoreordersdetialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outstoreordersdetials', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('order_id');
            $table->integer('shop_id');
            $table->integer('item_id');
            $table->float('original')->default(0);
            $table->decimal('request', 10, 4);
            $table->decimal('available', 10, 4);
            $table->decimal('received', 10, 4)->default(0.0000);
            $table->decimal('price', 10, 4);
            $table->decimal('total_price', 10, 4);
            $table->string('notes', 191);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outstoreordersdetials');
    }
}
