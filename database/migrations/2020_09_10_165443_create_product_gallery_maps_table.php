<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductGalleryMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_gallery_maps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image_url')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->string('thumb_url')->nullable();
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
        Schema::dropIfExists('product_gallery_maps');
    }
}
