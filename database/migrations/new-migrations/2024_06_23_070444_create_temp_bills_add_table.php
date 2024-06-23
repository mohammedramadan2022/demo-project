<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempBillsAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_bills_add', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('Addition_name');
            $table->integer('check_addition');
            $table->decimal('addition_value', 10, 4);
            $table->integer('bill_add_method');
            $table->integer('add_role')->default(0);
            $table->integer('add_resturant')->default(1)->comment("0 cash only 1 all 2 hall only 3 delivery only");
            $table->timestamp('add_date')->useCurrent();
            $table->integer('add_user');
            $table->integer('edit_user');
            $table->dateTime('edit_date')->nullable();
            $table->integer('shop_id');
            $table->integer('check_bill_type')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_bills_add');
    }
}
