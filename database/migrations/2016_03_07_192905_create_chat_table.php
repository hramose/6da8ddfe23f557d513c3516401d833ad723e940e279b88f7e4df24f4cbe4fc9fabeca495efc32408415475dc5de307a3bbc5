<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_chat', function (Blueprint $table) {
            $table->increments('cht_intId');
            $table->dateTime('cht_dtmCreatedAt');
            $table->string('cht_strEstado', 1); // Abierto, Cerrado
            $table->string('cht_strTipo', 1); // Privado, Publico
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_chat');
    }
}
