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
            $table->string('usr_strEstado', 1);
            $table->string('username', 32)->unique();
            $table->string('email', 256)->unique();
            $table->string('password', 60);
            $table->integer('rol_intId')->unsigned();
            $table->rememberToken();
            $table->timestamps();

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
        Schema::drop('tbl_usuario');
    }
}
