<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('veiculo', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('foto');
            $table->string('marca');
            $table->string('matricula');
            $table->string('ano_fabrico');
            $table->timestamps();
        });
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('veiculo');
	}

}
