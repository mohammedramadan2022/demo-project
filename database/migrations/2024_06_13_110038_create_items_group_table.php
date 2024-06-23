<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_group', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('group_name', 191);
            $table->integer('shop_id');
            $table->decimal('sale_price', 10, 4)->default(0.0000);
            $table->text('details')->nullable();
            $table->string('img', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_group');
    }
}
