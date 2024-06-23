<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_companies', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('company_name', 191);
            $table->decimal('income_ratio', 10, 4);
            $table->decimal('sale_ratio', 10, 4);
            $table->integer('add_user')->nullable();
            $table->dateTime('add_date')->nullable();
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            $table->integer('shop_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('for_all_items')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_companies');
    }
}
