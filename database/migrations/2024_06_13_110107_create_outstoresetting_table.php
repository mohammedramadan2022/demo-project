<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutstoresettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outstoresetting', function (Blueprint $table) {
            $table->integer('shop_id')->primary();
            $table->string('StoreUrl', 191);
            $table->integer('StoreID');
            $table->unsignedInteger('client_id');
            $table->string('StorePass', 191);
            $table->integer('updatfromID')->nullable();
            $table->string('updatfromURL', 500)->nullable();
            $table->string('UpdatfromPass', 191);
            $table->integer('generalID');
            $table->integer('smallshopID');
            $table->integer('supplier_id');
            $table->integer('sale_point')->nullable();
            $table->decimal('StorePercentage', 10, 2)->default(0.00);
            $table->decimal('StoreServices', 10, 2)->default(0.00);
            $table->decimal('StoreTransport', 10, 2)->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outstoresetting');
    }
}
