<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('supplier_name', 50);
            $table->string('tel', 20)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('supplier_person', 50)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->decimal('balance', 20, 2)->default(0.00);
            $table->integer('devices_company')->default(0);
            $table->integer('add_user')->nullable()->index('add_user');
            $table->timestamp('add_date')->useCurrent();
            $table->integer('edit_user')->nullable();
            $table->integer('edit_date')->nullable();
            $table->integer('shop_id')->index('shop_id');
            $table->string('tax_number', 191)->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('has_vat')->default(0);
            $table->integer('mobile_id')->nullable();
            $table->integer('group_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier');
    }
}
