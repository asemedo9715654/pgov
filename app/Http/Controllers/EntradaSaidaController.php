<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
use Input;

class EntradaSaidaController extends Controller {


    /**
    *
    */
    public function entrada_e_saida(){

        //query para base de dados
        $entradas_e_saidas =DB::table('entrada_e_saida')
        ->leftJoin('funcionario', 'entrada_e_saida.id_funcionario', '=', 'funcionario.id')
        ->paginate(10);
        return view('entradas_e_saidas.entradas_e_saidas',compact('entradas_e_saidas'));

    }

    /**
    *
    */
    public function criar_entrada(){
        $data=Input::all();
        //dd($data);
        $me=DB::table('entrada_e_saida')->insert(['id_funcionario' => $data['id_funcionario'],
        'hora_de_entrada'=>$data['hora_de_entrada'],
        'hora_de_saida'=>$data['hora_de_saida'],
        'dia_do_registro'=>$data['dia_do_registro']
        ]);

        return 1;

}

}
