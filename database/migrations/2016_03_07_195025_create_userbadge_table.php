<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserbadgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_userbadge', function (Blueprint $table) {
            $table->dateTime('ubg_dtmCreatedAt');
            $table->integer('usr_intId')->unsigned();
            $table->integer('bge_intId')->unsigned();

            $table->primary(['usr_intId', 'bge_intId']);
            
            $table->foreign('usr_intId')->references('usr_intId')->on('tbl_usuario');
            $table->foreign('bge_intId')->references('bge_intId')->on('tbl_badge');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_userbadge', function ($table) {
            $table->dropForeign(['usr_intId']);
        });

        Schema::table('tbl_userbadge', function ($table) {
            $table->dropForeign(['bge_intId']);
        });

        Schema::drop('tbl_userbadge');
    }
}
