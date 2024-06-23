<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempBadrShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_badr_shop', function (Blueprint $table) {
            $table->string('shop_name', 50)->default('اسم المؤسسة');
            $table->string('telephone', 20);
            $table->string('ower_name', 50)->default('اسم المالك');
            $table->integer('serial_id')->primary();
            $table->string('active_id', 50);
            $table->timestamp('active_date')->useCurrent();
            $table->string('tel_bill', 20)->nullable();
            $table->string('mobile_bill', 20)->nullable();
            $table->text('bill_header')->nullable();
            $table->text('message_bill')->nullable();
            $table->date('run_date')->nullable();
            $table->string('run_domian', 50)->default('http://shoponline.badrsystems.com/');
            $table->string('logo_path', 50)->default('images/logo.png');
            $table->boolean('color_option')->default(1);
            $table->integer('edit_incom_price')->default(1);
            $table->boolean('sale_quick')->default(0);
            $table->boolean('enter_quant')->default(1);
            $table->boolean('return_bill')->default(1);
            $table->boolean('sale_details')->default(0);
            $table->integer('items_company')->default(0);
            $table->integer('alert_due_date')->default(10);
            $table->integer('company_ratio')->default(0);
            $table->boolean('units_sup')->default(0);
            $table->tinyInteger('bolla')->nullable();
            $table->decimal('boll_per', 10, 2)->default(0.00);
            $table->decimal('bolla_gift', 10, 2)->default(0.00);
            $table->integer('bill_size')->default(1);
            $table->integer('bill_size_offer')->default(1);
            $table->integer('telephone_required')->default(0);
            $table->tinyInteger('billno_show')->nullable();
            $table->integer('bill_no_record')->default(12);
            $table->integer('barcode_size')->default(1);
            $table->boolean('barcode_reader')->default(1);
            $table->boolean('day_payment')->default(0);
            $table->string('type_name', 191)->default('تصنيف');
            $table->boolean('type_show_barcode')->default(0);
            $table->integer('price_percent')->nullable();
            $table->boolean('discount_type')->default(1);
            $table->boolean('edit_price_bill')->default(1);
            $table->tinyInteger('spend_at_report')->nullable();
            $table->tinyInteger('incom_at_report')->nullable();
            $table->string('currency', 191)->default('جنيه');
            $table->decimal('money_safe', 10, 2)->nullable();
            $table->boolean('netowrk_payment')->default(0)->comment("support network payment by visa");
            $table->integer('plan')->default(1);
            $table->integer('theme_store')->default(1);
            $table->text('install_path')->nullable();
            $table->string('server_path', 191)->nullable();
            $table->string('us_os', 191)->nullable();
            $table->string('pass_os', 191)->nullable();
            $table->integer('date_type')->default(2);
            $table->integer('huro_late')->default(0)->comment("عدد ساعات التاخير");
            $table->string('zone', 191)->nullable();
            $table->decimal('vs', 10, 2)->nullable();
            $table->integer('online')->default(0);
            $table->boolean('module')->default(1);
            $table->integer('u_no')->default(1);
            $table->boolean('notify')->default(0);
            $table->boolean('my_alerts')->default(0);
            $table->integer('multi_price')->default(1);
            $table->integer('check_lowest_price')->default(0);
            $table->tinyInteger('notes')->nullable();
            $table->boolean('auto_print')->default(0);
            $table->boolean('bill_time_alert')->default(0);
            $table->integer('style')->default(0);
            $table->integer('color_size')->default(0);
            $table->integer('badr_style')->default(1);
            $table->integer('language')->default(0);
            $table->string('about', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->boolean('bill_adds')->default(1);
            $table->boolean('installment_limit')->default(0);
            $table->string('upload_img', 191)->default('images/logo.png');
            $table->integer('decimal_num_quant')->default(0);
            $table->integer('decimal_num_price')->default(2);
            $table->boolean('select_client')->default(0);
            $table->boolean('client_limit')->default(0);
            $table->boolean('non_transaction_limit_show')->default(0);
            $table->integer('insatllments')->default(0);
            $table->integer('screen_type')->default(1);
            $table->integer('country')->default(63);
            $table->integer('backup_time')->default(120);
            $table->string('backup_path', 500)->default('backup');
            $table->integer('manufacturing')->default(0);
            $table->integer('distributor')->default(0)->comment("0 none 1 mainstore 2smallshop");
            $table->integer('sms_scrip')->default(1);
            $table->boolean('show_item_serial')->default(0);
            $table->string('upload_img_slide', 191)->nullable();
            $table->text('address')->nullable();
            $table->integer('Regist_purchases')->nullable();
            $table->boolean('remain_transaction')->default(1);
            $table->integer('points_granted')->default(0);
            $table->decimal('amount', 10, 2)->default(0.00);
            $table->boolean('income_saleprice')->default(0)->comment("update sale price at income bill");
            $table->boolean('show_expire_date')->default(0)->comment("show expire date");
            $table->integer('expire_notification')->default(30);
            $table->integer('POS')->default(1);
            $table->integer('ecomme')->default(1);
            $table->tinyInteger('bell_flag')->nullable();
            $table->date('bell_date')->nullable();
            $table->boolean('req_mandob')->default(0);
            $table->integer('new_req_bill_status')->default(3);
            $table->boolean('mandob_bill')->default(0);
            $table->integer('incom_total_filed')->default(0);
            $table->boolean('auto_barcode')->default(0);
            $table->string('start_barcode', 100)->default('000001');
            $table->integer('client_debenture')->default(1);
            $table->text('paypal_client_id')->nullable();
            $table->text('paypal_client_secret')->nullable();
            $table->string('base_url', 100)->nullable();
            $table->integer('offer_cats')->default(0)->comment("offers on categores 1 active");
            $table->integer('trans_price')->default(0);
            $table->integer('Enter_payment')->default(0)->comment("Enter payment by hand ");
            $table->integer('show_imag')->default(1)->comment("0 for hide item images");
            $table->integer('add_rest')->default(0)->comment("money reset add to client balance");
            $table->integer('pay_price_update')->default(1)->comment("1 for last price 2 for average price");
            $table->integer('Profits_Calc_method')->default(1)->comment("1 last pay price 2 average 3 actual pay price ");
            $table->integer('client_last_saleprice')->default(0);
            $table->integer('show_cat_imag')->default(0);
            $table->integer('export')->default(0);
            $table->boolean('spends_incomes')->default(0);
            $table->integer('fee_bill')->default(0);
            $table->integer('fee_type')->default(0);
            $table->string('bill_lang', 5)->default('ar');
            $table->integer('client_code')->default(0);
            $table->string('english_shop_name', 191)->nullable();
            $table->tinyInteger('back_sales')->nullable();
            $table->text('shop_terms')->nullable();
            $table->tinyInteger('multi_currency')->nullable();
            $table->integer('identity_numbers')->default(14);
            $table->boolean('item_factory')->default(0);
            $table->integer('discount_without_vat')->default(0);
            $table->decimal('discount_vat', 10, 4)->default(0.0000);
            $table->integer('watermark_use')->default(0);
            $table->string('watermark_path', 100)->nullable();
            $table->boolean('visitors_page')->default(0);
            $table->boolean('tables_management')->default(0);
            $table->boolean('add_cities')->default(1);
            $table->boolean('bill_services')->default(0);
            $table->boolean('delivery_man')->default(0);
            $table->boolean('quick_item_edit')->default(1);
            $table->boolean('item_code')->default(0);
            $table->boolean('send_bill_sms')->default(0);
            $table->boolean('generate_qr')->default(0);
            $table->boolean('advanced_car_care')->default(0);
            $table->boolean('check_serial_exist')->default(1);
            $table->boolean('discount_cards')->default(0);
            $table->boolean('item_print_ticket')->default(0);
            $table->boolean('junk_bill')->default(0);
            $table->boolean('confirm_store_transfer')->default(1)->comment("0 => confirmed");
            $table->integer('repeat_client_name')->default(0);
            $table->integer('repeat_mobile_number')->default(0);
            $table->integer('firm_vat_no')->default(0);
            $table->boolean('wash_print_ticket')->default(0);
            $table->boolean('prevent_edits')->default(0);
            $table->string('trade_number', 50)->nullable();
            $table->boolean('shipping_fee')->default(0);
            $table->boolean('driver_info')->default(0);
            $table->boolean('no_bill_type')->default(0);
            $table->boolean('coupon')->default(0);
            $table->boolean('purchase_screen_type')->default(1);
            $table->boolean('commission_type')->default(0);
            $table->string('rest_price_name', 191)->default('السعر العام');
            $table->boolean('show_sales_points_sales')->default(0);
            $table->boolean('transfer_indebtedness')->default(0);
            $table->boolean('installment_dashboard_show')->default(0);
            $table->boolean('show_input_keys')->default(0);
            $table->boolean('allow_lines')->default(0);
            $table->boolean('item_delivery')->default(0);
            $table->boolean('woocommerce_active')->default(0);
            $table->boolean('show_barcode')->default(0);
            $table->boolean('enable_whatsapp')->default(0);
            $table->integer('return_bill_size')->default(1);
            $table->boolean('item_lowest_price')->default(0);
            $table->boolean('extended_monitor')->default(0);
            $table->boolean('about_transaction')->default(0);
            $table->boolean('warranty')->default(0);
            $table->boolean('employee_balance')->default(0);
            $table->integer('print_instalments')->default(0);
            $table->boolean('maintenance_module')->default(0);
            $table->boolean('client_bill_increase')->default(0);
            $table->boolean('client_address_required')->default(0);
            $table->integer('show_sale_reports')->default(0);
            $table->boolean('press_screen_items_order_type')->default(0);
            $table->boolean('show_currency_in_invoices')->default(0);
            $table->boolean('spends_incomes_passwords')->default(0);
            $table->integer('show_item_about')->default(0);
            $table->boolean('changed_prices_offers')->default(0);
            $table->boolean('user_companies')->default(0);
            $table->boolean('update_unit_sale_price')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_badr_shop');
    }
}
