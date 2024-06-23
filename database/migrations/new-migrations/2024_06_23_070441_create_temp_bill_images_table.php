<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempBillImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_bill_images', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('shop_id');
            $table->integer('bill_id');
            $table->string('image_link', 555);
            $table->integer('add_user');
            $table->timestamp('add_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_bill_images');
    }
}
