<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_clients', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('group_id')->nullable();
            $table->string('client_name', 50);
            $table->string('address', 191)->nullable();
            $table->string('tele', 20)->nullable();
            $table->string('mobile1', 15)->nullable();
            $table->string('mobile2', 15)->nullable();
            $table->string('mobile3', 15)->nullable();
            $table->text('addition_data')->nullable();
            $table->decimal('balance', 20, 4)->default(0.0000);
            $table->decimal('installment_limit', 20, 4)->default(0.0000);
            $table->decimal('credit_limit', 20, 4)->nullable();
            $table->integer('non_transaction_limit')->nullable();
            $table->dateTime('date_zero')->nullable();
            $table->integer('add_user')->nullable();
            $table->dateTime('add_date')->nullable();
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            $table->integer('shop_id');
            $table->integer('notify_length')->nullable();
            $table->date('notify_next')->nullable();
            $table->integer('price_list_id')->default(0);
            $table->integer('city_id')->nullable();
            $table->boolean('blacklist')->default(0);
            $table->integer('gift_points')->default(0);
            $table->string('StorePass', 191)->nullable();
            $table->decimal('StoreTransport', 10, 2)->default(0.00);
            $table->decimal('StoreServices', 10, 2)->default(0.00);
            $table->string('info1', 20)->nullable()->comment("الرقم القومى");
            $table->string('info2', 191)->nullable()->comment("اسم الضامن");
            $table->string('info3', 500)->nullable()->comment("عنوان الضامن");
            $table->string('info4', 20)->nullable()->comment("تليفون الضامن");
            $table->string('info5', 20)->nullable()->comment("رقم قومى الضامن");
            $table->timestamps();
            $table->rememberToken();
            $table->string('password', 60)->nullable();
            $table->string('user_name', 191)->nullable();
            $table->integer('verified_mobile')->nullable();
            $table->string('device_key', 500)->nullable();
            $table->integer('active_code')->nullable();
            $table->text('api_token')->nullable();
            $table->string('address_area', 500)->nullable();
            $table->string('address_home', 500)->nullable();
            $table->string('address_street', 500)->nullable();
            $table->string('address_elecNo', 500)->nullable();
            $table->string('client_tax_number', 191)->nullable();
            $table->integer('mobile_id')->nullable();
            $table->string('image', 100)->nullable();
            $table->integer('display_order')->default(0);
            $table->decimal('lat', 12, 9)->nullable();
            $table->decimal('lon', 12, 9)->nullable();
            $table->string('email', 150)->nullable();
            $table->integer('player_id')->nullable();
            $table->boolean('is_table')->default(0)->comment("client 0 table 1");
            $table->integer('country_id')->default(0);
            $table->string('job', 25)->nullable();
            $table->integer('prev_treatment')->nullable();
            $table->integer('file_no')->nullable();
            $table->string('info6', 200)->nullable()->comment("car inside plate ");
            $table->string('info7', 200)->nullable()->comment("car engine");
            $table->string('car_type', 100)->default('0');
            $table->integer('car_sub_type')->default(0);
            $table->integer('car_year')->default(0);
            $table->integer('item_id')->default(0);
            $table->date('departure_date')->nullable();
            $table->decimal('client_bill_increase', 10, 4)->default(0.0000);
            $table->boolean('client_hidden')->default(0);
            $table->integer('app_client_id')->nullable();
            $table->string('branch_url')->nullable();
            $table->integer('branch_shop_id')->nullable();
            
            $table->unique(['id', 'shop_id'], 'clientid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_clients');
    }
}
