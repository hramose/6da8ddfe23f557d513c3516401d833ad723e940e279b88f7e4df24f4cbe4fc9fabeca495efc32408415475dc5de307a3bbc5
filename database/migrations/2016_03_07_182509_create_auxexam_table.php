<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuxexamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_examenAuxiliar', function (Blueprint $table) {
            $table->increments('eax_intId');
            $table->string('eax_strNombre', 45);
            $table->string('eax_strDescripcion', 180);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_examenAuxiliar');
    }
}
