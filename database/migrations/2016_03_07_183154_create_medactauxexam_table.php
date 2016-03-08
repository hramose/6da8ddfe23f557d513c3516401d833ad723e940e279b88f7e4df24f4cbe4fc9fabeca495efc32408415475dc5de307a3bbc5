<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedactauxexamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ActMedExamenAux', function (Blueprint $table) {
            $table->increments('ame_intId');
            $table->dateTime('ame_dtmCreatedAt');
            $table->integer('acm_intId')->unsigned();
            $table->integer('eax_intId')->unsigned();
            
            $table->foreign('acm_intId')->references('acm_intId')->on('tbl_actoMedico');
            $table->foreign('eax_intId')->references('eax_intId')->on('tbl_examenAuxiliar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ActMedExamenAux', function ($table) {
            $table->dropForeign(['acm_intId']);
        });

        Schema::table('tbl_ActMedExamenAux', function ($table) {
            $table->dropForeign(['eax_intId']);
        });

        Schema::drop('tbl_ActMedExamenAux');
    }
}
