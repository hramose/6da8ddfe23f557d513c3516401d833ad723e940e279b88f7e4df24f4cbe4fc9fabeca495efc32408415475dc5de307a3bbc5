<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_medico', function (Blueprint $table) {
            $table->increments('med_intId');
            $table->string('med_strNroColegiatura', 12);
            $table->string('med_strCodHabilidad', 10); 
            $table->date('med_dteFechaVenHab');
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
        Schema::table('tbl_medico', function ($table) {
            $table->dropForeign(['rol_intId']);
        });

        Schema::table('tbl_medico', function ($table) {
            $table->dropForeign(['usr_intid']);
        });
        
        Schema::drop('tbl_medico');
    }
}
