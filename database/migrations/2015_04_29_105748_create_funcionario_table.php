<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	 public function up()
    {
        Schema::create('funcionario', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nome');
            $table->string('foto');
            $table->string('morada');
            $table->integer('idade');
            $table->integer('bi');
            $table->string('local_de_trabalho');
            $table->string('matricula');
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
		 Schema::drop('funcionario');
	}

}
