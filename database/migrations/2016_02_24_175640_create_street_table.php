<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStreetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_distrito', function (Blueprint $table) {
            $table->string('dis_strId', 6);
            $table->string('dis_strNombre', 40);
            $table->string('pro_strId', 4);
            $table->string('dep_strId', 2);

            $table->primary('dis_strId');

            $table->foreign('pro_strId')->references('pro_strId')->on('tbl_provincia');
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
        Schema::table('tbl_distrito', function ($table) {
            $table->dropForeign(['pro_strid']);
        });

        Schema::table('tbl_distrito', function ($table) {
            $table->dropForeign(['dep_strid']);
        });
        
        Schema::drop('tbl_distrito');
    }
}
