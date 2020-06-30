<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create table blog
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
             $table->string('name',100);
            $table->string('slug');           
            $table->string('image');
            $table->string('content',255);
            $table->tinyInteger('status');
            $table->string('meta_keywords');
            $table->string('meta_title');
            $table->string('meta_descript');
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
        Schema::dropIfExists('blog');
    }
}
