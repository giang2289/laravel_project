<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create table banner
        Schema::create('banner', function (Blueprint $table) {
            $table->increments('id');
             $table->string('name');
             $table->string('image');
             $table->string('link');
             $table->tinyInteger('position');
             $table->tinyInteger('prioty');
             $table->tinyInteger('status');
             $table->string('description');
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
        Schema::dropIfExists('banner');
    }
}
