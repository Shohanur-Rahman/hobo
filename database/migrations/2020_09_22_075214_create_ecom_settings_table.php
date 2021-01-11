<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcomSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecom_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('currency_id');
            $table->float('shipping_cost');
            $table->float('outer_city_shipping_cost');
            $table->string('admin_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecom_settings');
    }
}
