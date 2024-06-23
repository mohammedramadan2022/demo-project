<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_bank_accounts', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('account_number', 50);
            $table->string('account_iban', 50)->nullable();
            $table->string('bank_name', 100)->nullable();
            $table->string('account_name', 100)->nullable();
            $table->string('branch', 50)->nullable();
            $table->integer('shop_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_bank_accounts');
    }
}
