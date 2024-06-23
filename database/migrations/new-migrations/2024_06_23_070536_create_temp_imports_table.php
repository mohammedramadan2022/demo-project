<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_imports', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('import_id');
            $table->dateTime('import_date');
            $table->decimal('amount', 20, 4)->nullable();
            $table->integer('sale_point');
            $table->text('note')->nullable();
            $table->decimal('paid', 20, 4)->nullable();
            $table->decimal('Remaining', 20, 4)->nullable();
            $table->integer('add_user');
            $table->timestamp('add_date')->useCurrent();
            $table->integer('edit_user');
            $table->dateTime('edit_date');
            $table->integer('shop_id');
            $table->integer('bill_add_id')->nullable();
            $table->integer('vat_value')->nullable();
            $table->string('import_file', 100)->nullable();
            $table->boolean('is_confirmed')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_imports');
    }
}
