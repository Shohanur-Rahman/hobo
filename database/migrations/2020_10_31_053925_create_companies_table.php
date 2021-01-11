<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedMediumInteger('user_id');
            $table->string('company_name');
            $table->string('company_number');
            $table->string('company_img');
            $table->string('line1')->nullable();
            $table->string('line2')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->text('describe_address')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
