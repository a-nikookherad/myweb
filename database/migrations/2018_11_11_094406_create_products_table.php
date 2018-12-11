<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->text('product_desc');
            $table->longText('product_description');
            $table->string('product_color');
            $table->float('product_price');
            $table->string('product_img');
            $table->boolean('product_status');
            $table->integer('cat_id')->index();
            $table->integer('sub_cat_id')->index();
            $table->integer('brand_id')->index();
            $table->integer('tag_id')->index();
            $table->integer('cart_id')->index();
            $table->integer('fav_id')->index();
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
        Schema::dropIfExists('tbl_products');
    }
}
