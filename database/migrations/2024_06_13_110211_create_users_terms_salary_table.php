<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTermsSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_terms_salary', function (Blueprint $table) {
            $table->integer('add_by');
            $table->timestamp('created_at')->useCurrent();
            $table->integer('id')->primary();
            $table->string('name', 225);
            $table->integer('shop_id');
            $table->integer('type');
            $table->timestamp('updated_at')->useCurrent();
            $table->integer('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_terms_salary');
    }
}
