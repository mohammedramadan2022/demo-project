<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('item_name', 191);
            $table->string('barcode', 191)->nullable();
            $table->decimal('sale_price', 20, 4)->nullable();
            $table->decimal('lowest_price', 20, 4)->nullable();
            $table->decimal('pay_price', 20, 4)->nullable();
            $table->decimal('disc_value', 20, 4)->nullable();
            $table->integer('sale_unit');
            $table->decimal('quantity', 20, 4)->nullable();
            $table->integer('unit_id')->index('unit_id');
            $table->integer('company_id')->default(0);
            $table->integer('device_id')->nullable();
            $table->integer('shelf')->nullable();
            $table->integer('pur_unit');
            $table->integer('pur_unit_equal');
            $table->date('expire_date')->index('expire_date');
            $table->integer('item_group');
            $table->integer('size_id')->nullable();
            $table->integer('color_id')->nullable();
            $table->date('incom_date');
            $table->integer('min_quantity');
            $table->boolean('Collection')->default(0);
            $table->boolean('cooking_add')->default(0)->comment("اضافات الاضناف بالمطبخ");
            $table->string('background_color', 20)->default('#FFF');
            $table->integer('order_show')->default(1);
            $table->integer('laststoreIdOrder')->default(0);
            $table->boolean('require_serial')->default(0);
            $table->decimal('meter_ceramic', 20, 2)->nullable();
            $table->boolean('available')->default(1)->index('available');
            $table->boolean('game')->default(0);
            $table->text('about');
            $table->integer('bolla')->default(0);
            $table->integer('supplier_id');
            $table->text('img');
            $table->integer('add_user');
            $table->timestamp('add_date')->useCurrent();
            $table->integer('edit_user');
            $table->dateTime('edit_date');
            $table->integer('shop_id')->index('shop_id_2');
            $table->boolean('is_service')->nullable();
            $table->boolean('is_hidden_deficiency_statement')->default(0);
            $table->boolean('is_engine')->default(0);
            $table->boolean('online')->default(0);
            $table->integer('card_company_id')->nullable();
            $table->string('details', 191);
            $table->integer('mobile_id')->nullable();
            $table->double('used_for_small')->nullable();
            $table->double('used_for_medium')->nullable();
            $table->double('used_for_large')->nullable();
            $table->integer('rent_type')->nullable()->comment("0 -> by hour, 1 -> by day");
            $table->integer('view')->default(2);
            $table->integer('vat_state')->default(1);
            $table->integer('vat_id')->index('vat_id');
            $table->string('item_add_type', 191)->nullable();
            $table->integer('withDiscount')->nullable();
            $table->decimal('discount_percent', 10, 2)->nullable();
            $table->integer('searchCount')->nullable();
            $table->integer('measruing_type')->default(0)->comment("0 by unit 1 by meter , 2 meter2");
            $table->string('name_en', 100)->nullable();
            $table->text('details_en')->nullable();
            $table->decimal('price_befor_offer', 10, 2)->default(0.00)->comment("old price for offer");
            $table->date('discount_start_date')->nullable();
            $table->date('discount_end_date')->nullable();
            $table->decimal('damaged', 10, 4)->default(0.0000);
            $table->integer('factory_id')->default(0);
            $table->integer('medicine')->default(0);
            $table->string('sale_code', 100)->default('');
            $table->string('purchase_code', 100)->default('');
            $table->boolean('is_card')->default(0);
            $table->decimal('additional_charge_fee', 10, 4)->default(0.0000);
            $table->integer('purchase_vat_state')->default(1);
            $table->integer('purchase_vat_id');
            $table->boolean('is_project')->default(0);
            $table->integer('project_client_id')->nullable();
            $table->boolean('is_project_finished')->default(0);
            $table->integer('warranty_id')->nullable();
            $table->date('project_date')->nullable();
            $table->boolean('about_transaction')->default(0);
            $table->boolean('is_special')->default(0);
            $table->float('profit_margin', 10, 4)->default(0.0000);
            $table->boolean('is_profit_margin')->default(0);
            
            $table->index(['shop_id', 'barcode'], 'shop_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
