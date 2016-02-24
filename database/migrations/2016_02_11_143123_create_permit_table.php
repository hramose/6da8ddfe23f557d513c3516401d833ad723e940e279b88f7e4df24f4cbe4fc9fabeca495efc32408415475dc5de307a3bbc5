<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_permiso', function (Blueprint $table) {
            $table->increments('per_intId');
            $table->string('per_strAbrebiatura', 3);
            $table->string('per_strNombre', 15);
            $table->string('per_strDescripcion', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_permiso');
    }
}
