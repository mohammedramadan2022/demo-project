<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempBarcodesettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_barcodesetting', function (Blueprint $table) {
            $table->integer('shop_id')->primary();
            $table->integer('support');
            $table->tinyInteger('price');
            $table->tinyInteger('showitem');
            $table->integer('show_about')->default(0);
            $table->integer('barcodestyle')->default(1);
            $table->string('titleName', 191);
            $table->integer('barcodecount');
            $table->decimal('barcodewidth', 10, 2);
            $table->decimal('barcodeheight', 10, 2);
            $table->decimal('itemup', 10, 2);
            $table->decimal('pageup', 10, 2);
            $table->decimal('itemdown', 10, 2);
            $table->decimal('pagedown', 10, 2);
            $table->decimal('itemright', 10, 2);
            $table->decimal('pageright', 10, 2);
            $table->decimal('itemleft', 10, 2);
            $table->decimal('pageleft', 10, 2);
            $table->decimal('logoheight', 10, 0)->nullable();
            $table->decimal('logowidth', 10, 0)->nullable();
            $table->decimal('codimgheight', 10, 0)->nullable();
            $table->decimal('codimgwidth', 10, 0)->nullable();
            $table->integer('support_scale')->default(0);
            $table->string('scale_start', 10)->nullable();
            $table->integer('scale_item')->default(2);
            $table->integer('discount_price_list')->default(-1);
            $table->integer('fontsize')->default(14);
            $table->integer('print_barcode')->default(0)->comment("show barcode under image");
            $table->integer('show_shop_name')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_barcodesetting');
    }
}
