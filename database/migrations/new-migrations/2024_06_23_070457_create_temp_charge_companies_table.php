<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempChargeCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_charge_companies', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 100);
            $table->string('name_en', 100)->nullable();
            $table->string('address')->nullable();
            $table->string('phone', 20)->nullable();
            $table->integer('shop_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_charge_companies');
    }
}
