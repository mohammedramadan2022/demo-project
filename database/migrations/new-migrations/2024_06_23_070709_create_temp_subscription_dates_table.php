<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSubscriptionDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_subscription_dates', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('sale_id');
            $table->integer('service_id');
            $table->integer('client_id');
            $table->date('session_date');
            $table->tinyInteger('done');
            $table->integer('shop_id');
            $table->text('notes')->nullable();
            $table->string('session_time', 199);
            $table->boolean('is_session')->default(0);
            $table->text('description')->nullable();
            $table->text('recommendation')->nullable();
            $table->text('service')->nullable();
            $table->integer('employee_id');
            $table->decimal('session_price', 10, 0)->default(0);
            $table->decimal('employee_ratio', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_subscription_dates');
    }
}
