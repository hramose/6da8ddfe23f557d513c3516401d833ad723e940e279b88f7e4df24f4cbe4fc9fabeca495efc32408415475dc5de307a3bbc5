<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_usuario', function (Blueprint $table) {
            $table->increments('usr_intId');
            $table->string('usr_strEstado', 1)->default('A'); // 1: Activo, 2: Inactivo
            $table->string('username', 32)->unique();
            $table->string('email', 256)->unique();
            $table->string('password', 60);
            $table->integer('prs_intId')->unsigned();
            $table->integer('rol_intId')->unsigned();
            // Gamification
            $table->integer('gam_intPoints');
            $table->integer('gam_intLevel');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('prs_intId')->references('prs_intId')->on('tbl_persona');
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
        Schema::table('tbl_usuario', function ($table) {
            $table->dropForeign(['rol_intid']);
        });

        Schema::table('tbl_usuario', function ($table) {
            $table->dropForeign(['prs_intId']);
        });

        Schema::drop('tbl_usuario');
    }
}
