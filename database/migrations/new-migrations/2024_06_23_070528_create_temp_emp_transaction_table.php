<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempEmpTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_emp_transaction', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->decimal('salary', 10, 4);
            $table->string('monthe', 191);
            $table->string('start_weekly', 191)->nullable();
            $table->string('end_weekly', 191)->nullable();
            $table->decimal('deduct', 10, 4);
            $table->integer('em_id');
            $table->date('spend_date');
            $table->decimal('amount', 10, 4);
            $table->string('resson', 191);
            $table->text('note')->nullable();
            $table->integer('type');
            $table->integer('client_transaction');
            $table->integer('add_user');
            $table->timestamp('add_date')->useCurrent();
            $table->integer('edit_user');
            $table->dateTime('edit_date');
            $table->integer('shop_id');
            $table->decimal('month_deduct', 10, 4)->default(0.0000);
            $table->decimal('addition', 10, 4)->default(0.0000);
            $table->integer('term_money_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_emp_transaction');
    }
}
