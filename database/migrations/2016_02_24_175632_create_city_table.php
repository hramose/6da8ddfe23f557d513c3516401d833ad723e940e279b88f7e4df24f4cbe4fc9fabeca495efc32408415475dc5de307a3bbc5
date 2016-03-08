<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_provincia', function (Blueprint $table) {
            $table->string('pro_strId', 4);
            $table->string('pro_strNombre', 35);
            $table->string('dep_strId', 2);

            $table->primary('pro_strId');

            $table->foreign('dep_strId')->references('dep_strId')->on('tbl_departamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_provincia', function ($table) {
            $table->dropForeign(['dep_strid']);
        });

        Schema::drop('tbl_provincia');
    }
}
