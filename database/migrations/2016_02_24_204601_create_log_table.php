<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_log', function (Blueprint $table) {
            $table->increments('log_intId');
            $table->string('log_strNombreTabla', 25);
            $table->integer('log_intIdTabla')->unsigned();
            $table->integer('log_intIdTablaOpc')->unsigned()->nullable();
            $table->dateTime('log_dtmCreatedAt');
            $table->integer('usr_intId')->unsigned();

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
        Schema::table('tbl_log', function ($table) {
            $table->dropForeign(['usr_intid']);
        });
        
        Schema::drop('tbl_log');
    }
}
