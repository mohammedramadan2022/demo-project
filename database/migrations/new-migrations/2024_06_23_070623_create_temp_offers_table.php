<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_offers', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->tinyInteger('active')->comment("1 => active");
            $table->string('name');
            $table->tinyInteger('discount_role')->comment("0 => direct , 1 => items, 2 => sequence");
            $table->boolean('category')->default(0)->comment("0 => same, 1 => different");
            $table->text('main_items');
            $table->text('relative_items')->nullable()->comment("quantity - discount");
            $table->decimal('discount_value', 10, 4)->default(0.0000);
            $table->tinyInteger('discount_type')->comment("0 => percent , 1 => money");
            $table->tinyInteger('main_condition')->nullable()->comment("0 => or , 1 => and, 2 => no condition");
            $table->tinyInteger('relative_condition')->nullable()->comment("0 => or , 1 => and, 2 => no condition");
            $table->tinyInteger('place')->comment("0 => dashborad , 1 => store , 2 => both");
            $table->boolean('show_offer')->default(1);
            $table->date('start_date');
            $table->date('expire_date');
            $table->integer('shop_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_offers');
    }
}
