<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('order_detail', function (Blueprint $table) {
            
            $table->integer('quantity');
            $table->tinyInteger('status');
             $table->unsignedbigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('unit');
             $table->unsignedbigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('product');
            $table->unsignedbigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order');
            $table->primary(['product_id','order_id']);
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
        Schema::dropIfExists('order_detail');
    }
}
