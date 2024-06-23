<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_discount', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('amount', 191);
            $table->integer('emp_id');
            $table->dateTime('add_date');
            $table->integer('add_user');
            $table->dateTime('edit_date');
            $table->integer('edit_user');
            $table->dateTime('discount_date')->comment("تاريخ تنفيذ الخصم");
            $table->text('notes');
            $table->integer('status')->default(0)->comment("نفذ الخصم ام لا");
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
        Schema::dropIfExists('salary_discount');
    }
}
