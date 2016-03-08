<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_quest', function (Blueprint $table) {
            $table->increments('qut_intId');
            $table->string('qut_strName', 35);
            $table->string('qut_strDescription', 150);
            $table->integer('qut_intPoints');
            $table->integer('cat_intId')->unsigned();

            $table->foreign('cat_intId')->references('cat_intId')->on('tbl_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_quest', function ($table) {
            $table->dropForeign(['cat_intId']);
        });
        
        Schema::drop('tbl_quest');
    }
}
