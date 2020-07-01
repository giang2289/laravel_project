<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Update foreign table product
    public function up()
    {
        //
        Schema::table('product', function (Blueprint $table) {
        $table->dropForeign(['unit_id']);
        $table->dropForeign(['category_id']);
        $table->dropForeign(['partner_id']);
        $table->foreign('unit_id')
            ->references('id')
            ->on('unit')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table category
             $table->foreign('category_id')
            ->references('id')
            ->on('category')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table partner
             $table->foreign('partner_id')
            ->references('id')
            ->on('partner')
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
