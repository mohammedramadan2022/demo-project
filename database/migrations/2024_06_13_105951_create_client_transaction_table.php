<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_transaction', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('client_id')->nullable()->index('client_id');
            $table->decimal('amount', 20, 4);
            $table->tinyInteger('type');
            $table->date('pay_day');
            $table->decimal('balance', 20, 4)->nullable();
            $table->integer('bill_id')->nullable();
            $table->integer('sale_back_id')->nullable();
            $table->decimal('bill_net_total', 20, 4)->nullable();
            $table->integer('problem_id')->nullable();
            $table->tinyInteger('effect')->comment("1 للايداع وصفر للسحب ");
            $table->integer('supplier_id')->nullable();
            $table->text('notes')->nullable();
            $table->dateTime('date_time')->nullable();
            $table->integer('safe_type')->nullable();
            $table->decimal('safe_balance', 20, 4)->nullable();
            $table->integer('safe_point_id')->nullable();
            $table->integer('effected_point')->nullable();
            $table->integer('user_id');
            $table->string('salary_month', 191)->nullable();
            $table->integer('OutTransactionID')->nullable();
            $table->integer('spend_id')->nullable();
            $table->integer('shop_id')->index('shop_id');
            $table->integer('insured_user')->nullable();
            $table->integer('insurance_status')->nullable();
            $table->integer('is_deleted')->nullable();
            $table->integer('employee_id')->default(0);
            $table->integer('installment_id')->default(0);
            $table->integer('money_percent')->default(0);
            $table->integer('show_transaction')->default(0);
            $table->decimal('user_commission', 10, 0)->default(0);
            $table->integer('related_to')->nullable();
            $table->string('check_info', 200)->nullable();
            $table->integer('request_id')->default(0);
            $table->integer('import_id')->nullable();
            $table->string('unique_columns', 200)->nullable();
            $table->smallInteger('was_sent')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_transaction');
    }
}
