<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_favorites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('cat_id')->nullable();
            $table->integer('sub_cat_id')->nullable();
            $table->integer('tag_id')->nullable();
            $table->integer('brand_id')->nullable();
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
        Schema::dropIfExists('tbl_favorites');
    }
}
