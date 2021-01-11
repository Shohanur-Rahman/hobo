<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewArrivalTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_arrival_tabs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cat_id')->nullable();
            $table->integer('no_of_product')->nullable();
            $table->boolean('is_published')->default(0); 
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
        Schema::dropIfExists('new_arrival_tabs');
    }
}
