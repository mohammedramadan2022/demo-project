<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191);
            $table->decimal('price', 10, 4)->default(0.0000);
            $table->boolean('enabled')->default(1);
            $table->unsignedInteger('shop_id');
            $table->unsignedInteger('add_user');
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
        Schema::dropIfExists('bill_services');
    }
}
