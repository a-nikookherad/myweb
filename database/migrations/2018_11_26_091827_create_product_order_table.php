<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOrderTable extends Migration
{

    public function up()
    {
        Schema::create('product_order', function (Blueprint $table) {
            $table->integer('order_id');
            $table->integer('product_id');
            $table->primary('order_id','product_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_order');
    }
}
