<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempCardComanyesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_card_comanyes', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('company_name', 191);
            $table->string('company_logo', 191)->nullable();
            $table->text('card_footer')->nullable();
            $table->text('card_header')->nullable();
            $table->integer('number_digital');
            $table->integer('shop_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_card_comanyes');
    }
}
