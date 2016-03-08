<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedactdiagnosticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ActMedDiagnostico', function (Blueprint $table) {
            $table->increments('amd_intId');
            $table->dateTime('amd_dtmCreatedAt');
            $table->integer('acm_intId')->unsigned();
            $table->integer('dgt_intId')->unsigned();
            
            $table->foreign('acm_intId')->references('acm_intId')->on('tbl_actoMedico');
            $table->foreign('dgt_intId')->references('dgt_intId')->on('tbl_diagnostico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ActMedDiagnostico', function ($table) {
            $table->dropForeign(['acm_intId']);
        });

        Schema::table('tbl_ActMedDiagnostico', function ($table) {
            $table->dropForeign(['dgt_intId']);
        });

        Schema::drop('tbl_ActMedDiagnostico');
    }
}
