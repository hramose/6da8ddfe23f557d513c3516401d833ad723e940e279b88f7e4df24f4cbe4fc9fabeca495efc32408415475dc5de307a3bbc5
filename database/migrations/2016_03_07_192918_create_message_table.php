<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_mensaje', function (Blueprint $table) {
            $table->increments('msj_intId');
            $table->dateTime('msj_dtmCreatedAt');
            $table->string('msj_strMensaje', 300);
            $table->integer('cht_intId')->unsigned();
            $table->integer('usr_intId')->unsigned();
            
            $table->foreign('cht_intId')->references('cht_intId')->on('tbl_chat');
            $table->foreign('usr_intId')->references('usr_intId')->on('tbl_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_mensaje', function ($table) {
            $table->dropForeign(['usr_intId']);
        });

        Schema::table('tbl_mensaje', function ($table) {
            $table->dropForeign(['cht_intId']);
        });

        Schema::drop('tbl_mensaje');
    }
}
