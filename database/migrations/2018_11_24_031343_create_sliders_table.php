<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{

    public function up()
    {
        Schema::create('tbl_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slide_title');
            $table->string('slide_desc',250);
            $table->string('slide_img');
            $table->string('slide_offer_img');
            $table->string('slide_status');
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
        Schema::dropIfExists('tbl_sliders');
    }
}
