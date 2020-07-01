<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignNewOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {     
         // Update foreign key table order 
         Schema::table('order', function (Blueprint $table) {
        //Drop foreign key
        $table->dropForeign(['user_id']);
        $table->dropForeign(['shipping_id']);
        $table->dropForeign(['payment_id']);
        // Foreign table user
        $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table Shipping_method
             $table->foreign('shipping_id')
            ->references('id')
            ->on('shipping_method')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table payment 
             $table->foreign('payment_id')
            ->references('id')
            ->on('payment_method')
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
