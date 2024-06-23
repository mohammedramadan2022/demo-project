<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempClientsGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_clients_groups', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 191);
            $table->integer('shop_id');
            $table->decimal('group_discount', 10, 2)->default(0.00);
            $table->integer('add_user')->nullable();
            $table->timestamp('add_date')->useCurrent();
            $table->integer('edit_user')->nullable();
            $table->integer('main_client')->default(0);
            $table->dateTime('edit_date')->nullable();
            $table->integer('mobile_id')->nullable();
            $table->decimal('group_commission', 10, 2)->default(0.00);
            $table->integer('client_id')->default(0);
            $table->decimal('commission_rate', 10, 2)->default(0.00);
            $table->decimal('quantity', 10, 2)->default(0.00);
            $table->boolean('is_hidden_installments_menu')->default(0);
            $table->boolean('is_hidden')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_clients_groups');
    }
}
