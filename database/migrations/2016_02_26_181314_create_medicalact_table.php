<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_actoMedico', function (Blueprint $table) {
            $table->increments('acm_intId');
            $table->dateTime('acm_dtmFechaRegistro');
            $table->string('acm_strAnamnesis', 250);
            $table->string('acm_strExamenRegional', 250);
            $table->string('acm_strControlMedico', 250);
            $table->string('acm_strDestino', 1); // Casa, Hositalizacion
            $table->integer('pac_intId')->unsigned();
            $table->integer('med_intId')->unsigned();

            $table->foreign('pac_intId')->references('pac_intId')->on('tbl_paciente');
            $table->foreign('med_intId')->references('med_intId')->on('tbl_medico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ActoMedico', function ($table) {
            $table->dropForeign(['pac_intId']);
        });

        Schema::table('tbl_ActoMedico', function ($table) {
            $table->dropForeign(['med_intId']);
        });

        Schema::drop('tbl_ActoMedico');
    }
}
