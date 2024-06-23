<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempLogPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_log_payments', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('shop_id')->index('shop_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('no_user');
            $table->decimal('amount', 10, 4);
            $table->string('currency_code')->default('EGP');
            $table->string('pay_method');
            $table->timestamp('add_date')->useCurrent();
            $table->integer('plan');
            $table->integer('approved');
            $table->mediumText('img');
            $table->text('convert_img')->nullable();
            $table->text('details')->nullable();
            $table->string('transactionId');
            $table->boolean('add_user')->default(1);
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_log_payments');
    }
}
