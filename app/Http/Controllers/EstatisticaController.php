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
		$funcionario = DB::table('funcionario')->where('id', $id)
            ->first();
						
	}


}
