<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempCheckoutSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_checkout_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('shop_id');
            $table->text('paypal_client_id')->nullable();
            $table->text('paypal_client_secret')->nullable();
            $table->text('paypal_s_client_id')->nullable();
            $table->text('paypal_s_client_secret')->nullable();
            $table->boolean('paypal_sandbox')->default(1);
            $table->text('payfort_merchant_identifier')->nullable();
            $table->text('payfort_access_code')->nullable();
            $table->text('payfort_SHARequest_phrase')->nullable();
            $table->text('payfort_SHAResponse_phrase')->nullable();
            $table->text('payfort_command')->nullable();
            $table->text('payfort_s_merchant_identifier')->nullable();
            $table->text('payfort_s_access_code')->nullable();
            $table->text('payfort_s_SHARequest_phrase')->nullable();
            $table->text('payfort_s_SHAResponse_phrase')->nullable();
            $table->text('payfort_s_command')->nullable();
            $table->boolean('payfort_sandbox')->default(1);
            $table->boolean('paytabs_sandbox')->default(1);
            $table->string('paytabs_email', 30)->nullable();
            $table->string('paytabs_s_secret')->nullable();
            $table->string('paytabs_secret')->nullable();
            $table->string('f_name', 20)->nullable();
            $table->string('l_name', 20)->nullable();
            $table->string('mobile', 25)->nullable();
            $table->string('site_url', 100)->nullable();
            $table->string('moyasar_secret_key', 100)->nullable();
            $table->string('moyasar_s_secret_key', 100)->nullable();
            $table->string('moyasar_public_key', 100)->nullable();
            $table->string('moyasar_s_public_key', 100)->nullable();
            $table->tinyInteger('moyasar_sandbox');
            $table->integer('myfatoorah_sandbox')->default(1);
            $table->text('myfatoorah_sandbox_key')->nullable();
            $table->string('myfatoorah_sandbox_url', 100)->nullable();
            $table->text('myfatoorah_key')->nullable();
            $table->string('myfatoorah_url', 100)->nullable();
            $table->string('myfatoorah_country_iso', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_checkout_settings');
    }
}
