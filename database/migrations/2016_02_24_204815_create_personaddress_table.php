<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_PersonaDireccion', function (Blueprint $table) {
            $table->increments('pdr_intId');
            $table->string('pdr_strTipoUbicacion', 1); // 1: Domicilio, 2: Trabajo, 3: Referencial
            $table->integer('prs_intId')->unsigned();
            $table->integer('dir_intId')->unsigned();

            $table->foreign('prs_intId')->references('prs_intId')->on('tbl_persona');
            $table->foreign('dir_intId')->references('dir_intId')->on('tbl_direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_PersonaDireccion', function ($table) {
            $table->dropForeign(['dir_intid']);
        });

        Schema::table('tbl_PersonaDireccion', function ($table) {
            $table->dropForeign(['prs_intid']);
        });
        
        Schema::drop('tbl_PersonaDireccion');
    }
}
