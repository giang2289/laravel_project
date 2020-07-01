<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Update foreign key table comment
    public function up()
    {
        //Update Foreign Key table comment
        Schema::table('comment', function (Blueprint $table) {
            //Drop foreign key
        $table->dropForeign(['blog_id']);
        $table->dropForeign(['user_id']);
        $table->dropForeign(['parent_id']);
        // Foreign table blog
        $table->foreign('blog_id')
            ->references('id')
            ->on('blog')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table user
             $table->foreign('user_id')
            ->references('id')
            ->on('user')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // Foreign table parent comment
             $table->foreign('parent_id')
            ->references('id')
            ->on('comment')
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
