<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_administrativo', function (Blueprint $table) {
            $table->increments('adm_intId');
            $table->string('adm_strNroColegiatura', 12);
            $table->integer('usr_intId')->unsigned();
            $table->integer('rol_intId')->unsigned();

            $table->foreign('usr_intId')->references('usr_intId')->on('tbl_usuario');
            $table->foreign('rol_intId')->references('rol_intId')->on('tbl_rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_administrativo', function ($table) {
            $table->dropForeign(['rol_intId']);
        });

        Schema::table('tbl_administrativo', function ($table) {
            $table->dropForeign(['usr_intid']);
        });
        
        Schema::drop('tbl_administrativo');
    }
}
