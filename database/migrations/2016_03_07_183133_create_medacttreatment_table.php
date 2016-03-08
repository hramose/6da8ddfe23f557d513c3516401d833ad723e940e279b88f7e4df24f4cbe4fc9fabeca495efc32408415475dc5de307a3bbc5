<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedacttreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ActMedTratamiento', function (Blueprint $table) {
            $table->increments('amt_intId');
            $table->dateTime('amt_dtmCreatedAt');
            $table->integer('acm_intId')->unsigned();
            $table->integer('trm_intId')->unsigned();
            
            $table->foreign('acm_intId')->references('acm_intId')->on('tbl_actoMedico');
            $table->foreign('trm_intId')->references('trm_intId')->on('tbl_tratamiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ActMedTratamiento', function ($table) {
            $table->dropForeign(['acm_intId']);
        });

        Schema::table('tbl_ActMedTratamiento', function ($table) {
            $table->dropForeign(['trm_intId']);
        });

        Schema::drop('tbl_ActMedTratamiento');
    }
}
