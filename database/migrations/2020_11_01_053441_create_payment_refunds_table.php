<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentRefundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_refunds', function (Blueprint $table) {
            $table->id();
            $table->string('refund_id')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('parent_payment')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->string('state')->nullable();
            $table->decimal('refund_from_transaction_fee', 8, 2)->nullable();
            $table->decimal('amount', 8, 2)->nullable();
            $table->decimal('refund_from_received_amount', 8, 2)->nullable();
            $table->decimal('total_refunded_amount', 8, 2)->nullable();
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
        Schema::dropIfExists('payment_refunds');
    }
}
