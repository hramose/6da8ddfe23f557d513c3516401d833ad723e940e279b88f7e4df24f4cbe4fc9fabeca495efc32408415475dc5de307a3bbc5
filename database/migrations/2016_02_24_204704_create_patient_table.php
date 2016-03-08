<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_paciente', function (Blueprint $table) {
            $table->increments('pac_intId');
            $table->integer('usr_intId')->unsigned();
            $table->integer('rol_intId')->unsigned();

            $table->foreign('usr_intId')->references('usr_intId')->on('tbl_usuario');
            $table->foreign('rol_intId')->references('rol_intId')->on('tbl_rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_paciente', function ($table) {
            $table->dropForeign(['rol_intId']);
        });

        Schema::table('tbl_paciente', function ($table) {
            $table->dropForeign(['usr_intid']);
        });
        
        Schema::drop('tbl_paciente');
    }
}
