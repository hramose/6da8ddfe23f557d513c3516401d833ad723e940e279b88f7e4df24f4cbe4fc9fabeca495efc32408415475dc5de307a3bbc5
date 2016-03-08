<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_diagnostico', function (Blueprint $table) {
            $table->increments('dgt_intId');
            $table->string('dgt_strNombre', 45);
            $table->string('dgt_strDescripcion', 180);
            $table->string('dgt_strGenero', 1); // 1: Masculino, 2: Femenino
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_diagnostico');
    }
}
