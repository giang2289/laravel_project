<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();          
            $table->string('name');
            $table->string('image');
            $table->float('price');
            $table->string('content');
            $table->string('description');       
            $table->tinyInteger('status');
            $table->string('unit');
            $table->string('meta_title');
            $table->unsignedbigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('unit');
            $table->unsignedbigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category');
            $table->unsignedbigInteger('partner_id');
            $table->foreign('partner_id')->references('id')->on('partner');
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
        Schema::dropIfExists('product');
    }
}
