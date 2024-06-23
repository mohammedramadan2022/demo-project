<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempBillSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_bill_setting', function (Blueprint $table) {
            $table->integer('shop_id')->primary();
            $table->text('bill_header')->nullable();
            $table->text('message_bill')->nullable();
            $table->integer('font_size')->default(14);
            $table->boolean('show_code')->default(1);
            $table->boolean('show_about')->default(1);
            $table->boolean('show_salesman')->default(0);
            $table->boolean('show_client_balance')->default(0);
            $table->boolean('smallbill_itemname')->default(1);
            $table->tinyInteger('show_item_serial')->nullable();
            $table->string('vat_number', 191)->nullable();
            $table->integer('show_client_name')->default(1);
            $table->integer('price_include_vat')->default(0);
            $table->integer('barcode_bill_no')->default(0);
            $table->string('direct_printer_name', 191)->nullable()->comment("direct printer connect server");
            $table->boolean('show_description')->default(0);
            $table->boolean('show_phone')->default(0);
            $table->boolean('show_discount')->default(0);
            $table->boolean('show_unites')->default(0);
            $table->boolean('notes')->default(0);
            $table->enum('place_logo', ['right', 'center', 'left'])->default('center');
            $table->boolean('show_bill_header')->default(0);
            $table->boolean('total_type')->default(0);
            $table->boolean('show_bill_message')->default(0);
            $table->boolean('show_vat_number')->default(0);
            $table->integer('logo_tall')->default(0);
            $table->integer('logo_weight')->default(0);
            $table->boolean('show_logo')->default(0);
            $table->boolean('show_client_address')->default(0);
            $table->boolean('show_item_barcode')->default(0);
            $table->boolean('show_item_name')->default(1);
            $table->boolean('item_discount')->default(0);
            $table->boolean('salesman_type')->default(0);
            $table->string('client_name_text', 191)->nullable();
            $table->boolean('bill_type')->default(0);
            $table->boolean('way_total_show')->default(0);
            $table->enum('total_place', ['right', 'left'])->default('right');
            $table->boolean('item_img')->default(0);
            $table->integer('img_height')->default(2);
            $table->integer('img_width')->default(2);
            $table->double('line_height')->default(1.2);
            $table->integer('show_unit')->nullable();
            $table->integer('qr_code')->default(0);
            $table->boolean('show_bill_serial')->default(0);
            $table->string('bill_logo', 225)->nullable();
            $table->tinyInteger('show_items_count');
            $table->tinyInteger('show_quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_bill_setting');
    }
}
