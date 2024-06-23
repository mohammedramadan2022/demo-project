<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices_list', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('list_name', 191);
            $table->integer('shop_id');
            $table->integer('add_user');
            $table->dateTime('add_date');
            $table->integer('edit_user');
            $table->dateTime('edit_date');
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
        Schema::dropIfExists('prices_list');
    }
}
