<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_pages', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('title', 200)->nullable();
            $table->string('image', 200)->nullable();
            $table->text('text')->nullable();
            $table->text('english_text')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('name', 200)->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('temp_pages');
    }
}
