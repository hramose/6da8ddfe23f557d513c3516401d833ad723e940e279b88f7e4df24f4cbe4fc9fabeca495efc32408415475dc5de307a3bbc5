<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_logDetalle', function (Blueprint $table) {
            $table->increments('lod_intId');
            $table->string('lod_strNombreCampo', 25);
            $table->string('lod_strCampoAntes', 100);
            $table->string('lod_strCampoActual', 100);
            $table->integer('log_intId')->unsigned();

            $table->foreign('log_intId')->references('log_intId')->on('tbl_log');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_logDetalle', function ($table) {
            $table->dropForeign(['log_intid']);
        });
        
        Schema::drop('tbl_logDetalle');
    }
}
