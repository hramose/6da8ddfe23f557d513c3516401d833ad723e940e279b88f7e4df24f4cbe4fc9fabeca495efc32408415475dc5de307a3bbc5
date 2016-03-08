<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_direccion', function (Blueprint $table) {
            $table->increments('dir_intId');
            $table->string('dir_strNomCompleto', 100);
            $table->string('dir_strUbigeo', 6);
            $table->string('dir_strTlfNumero', 16);

            $table->foreign('dir_strUbigeo')->references('dis_strId')->on('tbl_distrito');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_direccion', function ($table) {
            $table->dropForeign(['dir_strubigeo']);
        });
        
        Schema::drop('tbl_direccion');
    }
}
