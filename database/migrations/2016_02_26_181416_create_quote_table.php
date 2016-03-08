<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cita', function (Blueprint $table) {
            $table->increments('cta_intId');
            $table->string('cta_strDescripcion');
            $table->dateTime('cta_dtmFechaCita');
            $table->integer('acm_intId')->unsigned();

            $table->foreign('acm_intId')->references('acm_intId')->on('tbl_actoMedico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_cita', function ($table) {
            $table->dropForeign(['acm_intId']);
        });

        Schema::drop('tbl_cita');
    }
}
