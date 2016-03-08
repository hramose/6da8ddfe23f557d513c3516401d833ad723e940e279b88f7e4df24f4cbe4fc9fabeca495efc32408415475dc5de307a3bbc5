<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersontelephoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_PersonaTelefono', function (Blueprint $table) {
            $table->increments('ptl_intId');
            $table->string('ptl_strTipoTelefono', 1); // 1: Fijo, 2: Celular, 3: RPM
            $table->integer('prs_intId')->unsigned();
            $table->integer('tlf_intId')->unsigned();

            $table->foreign('prs_intId')->references('prs_intId')->on('tbl_persona');
            $table->foreign('tlf_intId')->references('tlf_intId')->on('tbl_telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_PersonaTelefono', function ($table) {
            $table->dropForeign(['prs_intid']);
        });

        Schema::table('tbl_PersonaTelefono', function ($table) {
            $table->dropForeign(['tlf_intid']);
        });

        Schema::drop('tbl_PersonaTelefono');
    }
}
