<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EntradaESaidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('entrada_e_saida', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_funcionario');
            $table->string('hora_de_entrada');
            $table->string('hora_de_saida');
            $table->string('dia_do_registro');
            $table->timestamps();
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entrada_e_saida');
	}

}
