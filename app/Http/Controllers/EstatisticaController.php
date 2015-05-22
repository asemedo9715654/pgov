<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EstatisticaController extends Controller {

	/**

	*/
	public function mostrar_estatistica(){


	}

	//retorna tudo sobre entradas
	public function index(){
    //numero de caros por dia
		$funcionarios = DB::table('funcionario')
            ->get();

		$num_funcionario = count($funcionarios);

		$entrada = DB::table('entrada_e_saida')
            ->get();

		$num_entrada = count($funcionarios);

		return ()		

	}


}
