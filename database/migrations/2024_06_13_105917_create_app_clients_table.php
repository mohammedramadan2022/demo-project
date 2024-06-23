<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_clients', function (Blueprint $table) {
            $table->string('api_token')->nullable();
            $table->string('client_name');
            $table->timestamps();
            $table->string('email')->nullable();
            $table->integer('id')->primary();
            $table->text('image');
            $table->string('password');
            $table->string('player_id')->nullable();
            $table->enum('status', ['active', 'in_active'])->default('in_active');
            $table->string('tele');
            $table->string('verification_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_clients');
    }
}
