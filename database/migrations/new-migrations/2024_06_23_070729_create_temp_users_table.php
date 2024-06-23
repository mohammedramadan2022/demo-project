<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lock_version')->default(0);
            $table->string('user_name', 50);
            $table->string('password', 50);
            $table->string('name', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('address', 191)->nullable();
            $table->string('tel', 191)->nullable();
            $table->date('birth_date')->nullable();
            $table->date('employe_date')->nullable();
            $table->decimal('salary', 10, 2)->nullable();
            $table->decimal('money_out', 10, 2)->nullable();
            $table->integer('city_id')->nullable();
            $table->decimal('credit', 10, 2)->nullable();
            $table->decimal('recipient', 10, 2)->nullable();
            $table->integer('sale_point')->default(1)->index('sale_point');
            $table->boolean('point_change')->default(1);
            $table->integer('privilege')->default(1);
            $table->boolean('login')->default(1);
            $table->boolean('new_sale_puplic')->default(1);
            $table->boolean('new_sale_quick')->default(1);
            $table->boolean('new_sale_disc')->default(1);
            $table->boolean('return_sales_insert')->default(1);
            $table->boolean('pay_sales')->default(1);
            $table->integer('cooking')->default(1);
            $table->integer('delivery')->default(1);
            $table->boolean('incoming_bill')->default(1);
            $table->boolean('incoming_bill_return')->default(1);
            $table->boolean('incoming_show')->default(1);
            $table->boolean('show_supplier')->default(1);
            $table->boolean('new_supplier')->default(1);
            $table->boolean('new_items')->default(1);
            $table->boolean('show_items')->default(1);
            $table->boolean('show_min')->default(1);
            $table->boolean('show_bolla')->default(1);
            $table->boolean('users')->default(1);
            $table->boolean('show_clients_data')->default(1);
            $table->boolean('setting')->default(1);
            $table->boolean('show_clients')->default(1);
            $table->boolean('change_date')->default(1);
            $table->boolean('unites')->default(1);
            $table->boolean('data')->default(1)->comment("Backup_copying");
            $table->integer('add_user')->nullable();
            $table->timestamp('add_date')->useCurrent();
            $table->integer('edit_user')->nullable();
            $table->dateTime('edit_date')->nullable();
            $table->boolean('edit_items')->default(1);
            $table->boolean('show_day_total')->default(1);
            $table->boolean('close_shift')->default(1);
            $table->boolean('spending')->default(1);
            $table->boolean('show_report')->default(1);
            $table->boolean('show_pay_price')->default(1)->comment("show pay price");
            $table->boolean('sale_discount')->default(1);
            $table->boolean('sale_cash')->default(1);
            $table->boolean('sale_price')->default(1);
            $table->boolean('edit_payment')->default(1)->comment("تعديل خانة الدفع فى صفحة المبيعات ");
            $table->integer('send_alerts')->default(1);
            $table->boolean('change_store')->default(1)->comment("تغير مخزن البيع");
            $table->string('db_name', 191)->default('shoes_test');
            $table->string('us_name', 191)->default('root');
            $table->boolean('fix_man')->default(0);
            $table->boolean('work')->default(1);
            $table->tinyInteger('show_problems')->nullable();
            $table->string('dbpassword', 191)->nullable();
            $table->string('job', 191)->nullable();
            $table->string('job_number')->nullable();
            $table->string('health_certificate')->nullable();
            $table->string('insurance_number')->nullable();
            $table->string('national_id')->nullable();
            $table->date('start_work')->nullable();
            $table->integer('shop_id')->index('shop_id');
            $table->tinyInteger('enter_cards')->nullable();
            $table->tinyInteger('sale_cards')->nullable();
            $table->tinyInteger('type_user')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('store_id')->nullable();
            $table->integer('show_prices')->default(1);
            $table->integer('show_total_point')->default(1);
            $table->text('api_token')->nullable();
            $table->boolean('change_shop')->default(0);
            $table->boolean('search_in_shops')->default(0);
            $table->integer('clients_group')->default(0);
            $table->decimal('month_deduct', 10, 4)->default(0.0000);
            $table->integer('type')->default(0);
            $table->integer('change_req_status')->default(0);
            $table->integer('create_req_bill')->default(0);
            $table->integer('assign_request')->default(0);
            $table->integer('manage_sms')->default(1);
            $table->integer('stop_flag')->default(0);
            $table->boolean('accept_debentures')->default(1);
            $table->integer('edit_client_data')->default(1);
            $table->integer('covenant_value')->default(0);
            $table->date('covenant_receive_date')->nullable();
            $table->date('covenant_destruction_date')->nullable();
            $table->string('covenant_description', 191)->nullable();
            $table->tinyInteger('show_messages')->nullable();
            $table->tinyInteger('online_requests')->nullable();
            $table->tinyInteger('barcode_inventory')->nullable();
            $table->tinyInteger('temp_store_in_out')->nullable();
            $table->tinyInteger('update_static_pages')->nullable();
            $table->tinyInteger('update_socials')->nullable();
            $table->tinyInteger('show_sliders')->nullable();
            $table->integer('is_employee')->default(0);
            $table->boolean('email_clients')->default(0);
            $table->boolean('confirm_clients')->default(0);
            $table->boolean('change_order_qty')->default(0);
            $table->integer('update_payment_gateway')->default(0);
            $table->integer('contact_info')->default(0);
            $table->integer('coupons')->default(0);
            $table->integer('website_discount')->default(0);
            $table->integer('request_settings')->default(0);
            $table->string('player_id', 191)->nullable();
            $table->boolean('change_bill_sale')->default(1);
            $table->boolean('change_bill_income')->default(1);
            $table->boolean('can_edit_client_days')->default(0)->comment("0 => not allowed, 1 => allowed");
            $table->boolean('reservation_create')->default(1);
            $table->boolean('reservation_edit')->default(1);
            $table->boolean('reservation_show')->default(1);
            $table->boolean('reservation_confirm')->default(1);
            $table->boolean('reservation_delete')->default(1);
            $table->boolean('add_spend')->default(1);
            $table->boolean('confirm_spend')->default(1);
            $table->boolean('edit_client')->default(1);
            $table->boolean('delete_client')->default(1);
            $table->decimal('money_percent', 4, 2)->default(0.00);
            $table->boolean('receipt')->default(1);
            $table->boolean('watch')->default(1);
            $table->boolean('activate_multi_price')->default(1);
            $table->decimal('commission', 10, 0)->default(0);
            $table->integer('manufacture')->default(1);
            $table->integer('define_commissions')->default(1);
            $table->boolean('tables_operations')->default(0);
            $table->boolean('cities_operations')->default(1);
            $table->boolean('client_prices_list')->default(0);
            $table->boolean('offer_sales')->default(0);
            $table->boolean('bill_services')->default(0);
            $table->boolean('delivery_man')->default(0);
            $table->boolean('delivery_periods')->default(0);
            $table->boolean('show_vat_report')->default(1);
            $table->boolean('save_bill')->default(1);
            $table->boolean('print_ticket')->default(1);
            $table->boolean('delivery_man_operations')->default(0);
            $table->boolean('bill_services_operations')->default(0);
            $table->boolean('tracking')->default(1);
            $table->boolean('make_bill')->default(1);
            $table->integer('show_points')->default(1);
            $table->boolean('sale_points_transfer')->default(0);
            $table->boolean('barcode_settings')->default(1);
            $table->boolean('edit_date_spend_income')->default(0);
            $table->boolean('sell_less_purchase_price')->default(1);
            $table->boolean('delete_items_from_tables')->default(1);
            $table->boolean('active_clients')->default(0);
            $table->boolean('edit_barcode')->default(1);
            $table->integer('can_see_maintenance_profit')->default(0);
            $table->boolean('can_see_points_of_sale')->default(0);
            $table->boolean('no_bill_type')->default(0);
            $table->integer('supervisor_id')->default(0);
            $table->integer('branch_id')->default(0);
            $table->integer('line_id')->default(0);
            $table->dateTime('updated_at')->nullable();
            $table->boolean('show_maintenance_details')->default(1);
            $table->boolean('print_client_orders')->default(1);
            $table->integer('show_sale_reports')->default(0);
            $table->boolean('supervisor_can_edit_lines')->default(0);
            $table->boolean('user_role')->default(0);
            $table->boolean('can_see_profit')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->unsignedInteger('user_type_id')->nullable();
            $table->boolean('accounting_reports')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_users');
    }
}
