<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('facebook',100)->nullable();
            $table->string('twitter',100)->nullable();
            $table->string('linked_in',100)->nullable();
            $table->string('google',100)->nullable();
            $table->string('gmail',100)->nullable();
            $table->string('gmail_ico',100)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('phone_ico',100)->nullable();
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
        Schema::dropIfExists('site_infos');
    }
}
