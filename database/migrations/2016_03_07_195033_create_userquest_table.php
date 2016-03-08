<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserquestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_userquest', function (Blueprint $table) {
            $table->increments('uqt_intId');
            $table->dateTime('uqt_dtmCompletedAt');
            $table->integer('usr_intId')->unsigned();
            $table->integer('qut_intId')->unsigned();
            
            $table->foreign('usr_intId')->references('usr_intId')->on('tbl_usuario');
            $table->foreign('qut_intId')->references('qut_intId')->on('tbl_quest');
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
            $table->dropForeign(['qut_intId']);
        });
        
        Schema::drop('tbl_userquest');
    }
}
