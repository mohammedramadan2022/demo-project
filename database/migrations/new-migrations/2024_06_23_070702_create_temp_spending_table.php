<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSpendingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_spending', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('spend_id');
            $table->date('spend_date');
            $table->decimal('amount', 20, 4)->nullable();
            $table->integer('Spend_for')->default(0);
            $table->integer('spend_type');
            $table->integer('sale_point');
            $table->text('note')->nullable();
            $table->integer('add_user');
            $table->timestamp('add_date')->useCurrent();
            $table->integer('edit_user');
            $table->dateTime('edit_date');
            $table->integer('shop_id');
            $table->integer('bill_add_id')->nullable();
            $table->decimal('vat_value', 20, 0)->nullable();
            $table->string('spend_file', 100)->nullable();
            $table->boolean('is_confirmed')->default(0);
            $table->integer('bill_no')->nullable();
            $table->integer('local_id')->default(0);
            $table->integer('back_id')->default(0);
            $table->integer('sale_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_spending');
    }
}
