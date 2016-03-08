<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_procedimiento', function (Blueprint $table) {
            $table->increments('prd_intId');
            $table->string('prd_strNombre', 45);
            $table->string('prd_strDescripcion', 180);
            $table->string('prd_strTipo', 1); // 1: x, 2: y
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_procedimiento');
    }
}
