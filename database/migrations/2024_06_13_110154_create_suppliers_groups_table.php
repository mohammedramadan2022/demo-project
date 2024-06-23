<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers_groups', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name', 191);
            $table->integer('shop_id');
            $table->integer('add_user');
            $table->timestamp('add_date')->useCurrent();
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers_groups');
    }
}
