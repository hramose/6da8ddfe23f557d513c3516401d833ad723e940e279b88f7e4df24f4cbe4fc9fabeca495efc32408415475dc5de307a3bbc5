<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolpermitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_RolPermiso', function (Blueprint $table) {
            $table->tinyInteger('rop_intCrud')->unsigned();
            $table->integer('rol_intId')->unsigned();
            $table->integer('per_intId')->unsigned();

            $table->primary(['rol_intId', 'per_intId']);
            
            $table->foreign('rol_intId')->references('rol_intId')->on('tbl_rol');
            $table->foreign('per_intId')->references('per_intId')->on('tbl_permiso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_RolPermiso', function ($table) {
            $table->dropForeign(['per_intid']);
        });

        Schema::table('tbl_RolPermiso', function ($table) {
            $table->dropForeign(['rol_intid']);
        });

        Schema::drop('tbl_RolPermiso');
    }
}
