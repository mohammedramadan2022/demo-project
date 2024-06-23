<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempStoreShelfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_store_shelfs', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('shelf_name', 191);
            $table->integer('store_id');
            $table->integer('add_user');
            $table->timestamp('Add_date')->useCurrent();
            $table->integer('edit_user');
            $table->dateTime('edit_date')->nullable();
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
        Schema::dropIfExists('temp_store_shelfs');
    }
}
