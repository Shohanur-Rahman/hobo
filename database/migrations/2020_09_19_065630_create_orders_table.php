<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('shipping_id');
            $table->unsignedBigInteger('seller_id');
            $table->string('transaction_id')->nullable();
            $table->string('payer_id')->nullable();
            $table->string('payer_email')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_state')->nullable();
            $table->string('payment_id')->nullable();
            $table->unsignedBigInteger('total_amount');
            $table->unsignedBigInteger('paid_amount');
            $table->string('status');
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
        Schema::dropIfExists('orders');
    }
}
