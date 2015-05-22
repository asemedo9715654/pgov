<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Carbon\Carbon;

use DB;
use Input;

class EntradaSaidaController extends Controller {


    /**
     *  para
     */
    public function entrada_e_saida(){

        //query para base de dados
        $entradas_e_saidas =DB::table('entrada_e_saida')
            ->leftJoin('funcionario', 'entrada_e_saida.id_funcionario', '=', 'funcionario.id')
            ->paginate(10);
        return view('entradas_e_saidas.entradas_e_saidas',compact('entradas_e_saidas'));

    }

    /**
     * api para registrar saida
     * @param $id
     */
    public function registro_de_saida($id){

        $agora = Carbon::now(); //para data
        DB::table('entrada_e_saida')
            ->where('id', $id)
            ->update(array('hora_de_saida' => $agora->hour.":".$agora->minute));

    }

    /**
     *
     * recebe só o id do funcionario via post
     *
     */
    public function criar_entrada($id_f){

        //dd($data);
        $check=DB::table('funcionario')->where('id',$id_f)->first();
        $response["entrada"] = array();

        if(count($check)>0){
            $agora = Carbon::now();

            $me=DB::table('entrada_e_saida')->insert(['id_funcionario' => $id_f,
                'hora_de_entrada'=>$agora->hour.":".$agora->minute,
                'dia_do_registro'=>$agora->day."/".$agora->month."/".$agora->year
            ]);
            $response["entrada"]=1;
            $response["status"]='true';
            $response["message"]='ok';

        }else{
            $response["entrada"]=0;
            $response["status"]='false';
            $response["message"]='erro funcionario nao encotrado';
        }

        return $response;
    }

}
