<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('delivery_id');
            $table->string('title')->default('This is a demo product');
            $table->text('short_description')->nullable();
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('sku')->nullable();
            $table->decimal('old_price', 8, 2)->nullable();
            $table->decimal('new_price', 8, 2)->nullable();
            $table->boolean('is_published')->default(1);
            $table->boolean('is_new')->default(0);
            $table->boolean('is_feature')->default(0);
            $table->boolean('allow_review')->default(1);
            $table->boolean('show_on_home')->default(0);
            $table->bigInteger('user_id')->nullable();
            $table->integer('availability_id')->nullable();
            $table->bigInteger('brand_id')->nullable();
            $table->bigInteger('size_id')->nullable();
            $table->bigInteger('color_id')->nullable();
            $table->date('available_start_date')->nullable();
            $table->date('available_end_date')->nullable();
            $table->boolean('is_inventory')->default(0);
            $table->bigInteger('inventory_qty')->nullable();
            $table->integer('minimum_inventory_qty')->nullable();
            $table->boolean('notify_low_inventory')->nullable();
            $table->bigInteger('warehouse_id')->nullable();
            $table->float('shipping_charge')->default(0);
            $table->float('height')->default(0);
            $table->float('width')->default(0);
            $table->float('weight')->default(0);
            $table->boolean('show_availability')->default(0);
            $table->integer('minimum_cart_qty')->nullable();
            $table->string('featured_image')->nullable();
            $table->boolean('allow_seo')->default(0);
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
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
        Schema::dropIfExists('products');
    }
}
