<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempItemCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_item_comments', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('item_id')->nullable();
            $table->string('comment', 191)->nullable();
            $table->integer('comment_user_id')->nullable();
            $table->integer('shop_id');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_item_comments');
    }
}
