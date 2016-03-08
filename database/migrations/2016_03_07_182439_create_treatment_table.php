<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tratamiento', function (Blueprint $table) {
            $table->increments('trm_intId');
            $table->string('trm_strNombre', 45);
            $table->string('trm_strDescripcion', 180);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_tratamiento');
    }
}
