<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignOrderdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Update foreign key table order detail
         Schema::table('order_detail', function (Blueprint $table) {
        //Drop foreign key
        $table->dropForeign(['unit_id']);
        $table->dropForeign(['product_id']);
        $table->dropForeign(['order_id']);
        // Foreign table unit
        $table->foreign('unit_id')
            ->references('id')
            ->on('unit')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table product
             $table->foreign('product_id')
            ->references('id')
            ->on('product')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table order 
             $table->foreign('order_id')
            ->references('id')
            ->on('order')
            ->onUpdate('cascade')
            ->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
