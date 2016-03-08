<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_persona', function (Blueprint $table) {
            $table->increments('prs_intId');
            $table->string('prs_strDocumento', 12);
            $table->string('prs_strTipoDocumento', 1); // 1:DNI, 2:RUC, 3:C. extranjeria, 4:Pasaporte
            $table->string('prs_strGenero', 1); // 1: Masculino, 2: Femenino
            $table->string('prs_strApePat', 30);
            $table->string('prs_strApeMat', 30);
            $table->string('prs_Nombres', 60);
            $table->string('prs_strEstadoCivil', 1); // 1: Soltero, 2: Casado, 3: Divorsiado, 4: Viudo
            $table->date('prs_dteFechaNacimiento');
            $table->string('prs_fechNacUbigeo', 6);

            $table->foreign('prs_fechNacUbigeo')->references('dis_strId')->on('tbl_distrito');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_persona', function ($table) {
            $table->dropForeign(['prs_fechNacUbigeo']);
        });

        Schema::drop('tbl_persona');
    }
}
