<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_badge', function (Blueprint $table) {
            $table->increments('bge_intId');
            $table->string('bge_strName', 35);
            $table->string('bge_strDescription', 150);
            $table->binary('bge_Image');
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
        Schema::table('tbl_badge', function ($table) {
            $table->dropForeign(['cat_intId']);
        });

        Schema::drop('tbl_badge');
    }
}
