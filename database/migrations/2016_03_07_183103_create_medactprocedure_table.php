<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedactprocedureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ActMedProcedimiento', function (Blueprint $table) {
            $table->increments('amp_intId');
            $table->dateTime('amp_dtmCreatedAt');
            $table->integer('acm_intId')->unsigned();
            $table->integer('prd_intId')->unsigned();
            
            $table->foreign('acm_intId')->references('acm_intId')->on('tbl_actoMedico');
            $table->foreign('prd_intId')->references('prd_intId')->on('tbl_procedimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ActMedProcedimiento', function ($table) {
            $table->dropForeign(['acm_intId']);
        });

        Schema::table('tbl_ActMedProcedimiento', function ($table) {
            $table->dropForeign(['prd_intId']);
        });

        Schema::drop('tbl_ActMedProcedimiento');
    }
}
