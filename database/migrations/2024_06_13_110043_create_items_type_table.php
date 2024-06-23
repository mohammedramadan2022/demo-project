<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_type', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 50);
            $table->string('upload_img', 50)->nullable();
            $table->string('Name_report', 191)->nullable();
            $table->integer('arrange_type')->default(1);
            $table->integer('hiddentouch')->default(0)->index('hiddentouch');
            $table->integer('shop_id')->index('shop_id');
            $table->integer('category_id')->default(0)->index('category_id');
            $table->integer('display_order')->default(0);
            $table->integer('mobile_id')->nullable();
            $table->integer('published')->default(1)->index('published');
            $table->string('name_en', 100)->nullable();
            $table->string('printer_name', 191)->nullable();
            $table->boolean('kitchen_use')->default(1);
            $table->boolean('show_min_qty')->default(1);
            $table->integer('maintenance_use')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_type');
    }
}
