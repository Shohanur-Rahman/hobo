<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mail_id');
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('user_type')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('read_at')->default(0);
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('mail_addresses');
    }
}
