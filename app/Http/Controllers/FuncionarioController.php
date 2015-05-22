<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\FuncionarioRequest;

use Illuminate\Http\Request;
use DB;
use Input;


class FuncionarioController extends Controller {

    /**
     * api para lista de funncionaio
     * @return string
     */
    public function api_lista_de_funcionario($matricula){
        //query to db

        $funcionario =DB::table('funcionario')->where('matricula', $matricula)
        ->first();

        $response["listafuncionario"] = array();

        if(count($funcionario)>0){

            $um=array();
            $um['nome']=$funcionario->nome;
            $um['morada']=$funcionario->morada;
            $um['foto']='http://b088d393.ngrok.io/images/'.$funcionario->foto;
            $um['idade']=$funcionario->idade;

            $um['local_de_trabalho']=$funcionario->local_de_trabalho;
            $um['autorizacao']=$funcionario->autorizacao;
            $um['matricula']=$funcionario->matricula;

            array_push($response["listafuncionario"], $um);
            $response["status"]='true';
            $response["message"]='Ok funcionario encontrado';

        }else{
            $response["status"]='false';
            $response["message"]='erro funcionario nao encontrado!';

        }

        return  $response;
    }

    /**
    *
    *
    **/
    public function api_todos_funcinario(){
        //query to db

        $funcionarios =DB::table('funcionario')->get();

        $response["listafuncionario"] = array();

        if(count($funcionarios)>0){
            foreach($funcionarios as $funcionario){
               $um=array();
               $um['nome']=$funcionario->nome;
               $um['morada']=$funcionario->morada;
               $um['foto']='http://b088d393.ngrok.io/images/'.$funcionario->foto;
               $um['idade']=$funcionario->idade;

               $um['local_de_trabalho']=$funcionario->local_de_trabalho;
               $um['autorizacao']=$funcionario->autorizacao;
               $um['matricula']=$funcionario->matricula;

               array_push($response["listafuncionario"], $um);

           }
           $response['status'] = 'true';
           $response['message'] = 'ok';

       }else{
           $response['status'] = 'false';
           $response['message'] = 'error';
       }

        return $response;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function adicionar()
    {
        $veiculos = DB::table('veiculo')->get();

        return view('funcionario.adicionar',compact('veiculos'));
    }

    /**
     *
     */
    public function editar($id){

        $funcionario = DB::table('funcionario')->where('id', $id)
            ->first();
        return view('funcionario.editar',compact('funcionario'));

    }

    /**
     *
     */
    public function update($id,Request $request){

        if($request->get('foto')){
        $destinationPath = 'img'; // upload path
        $extension = Input::file('foto')
            ->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        $target_path = ( $destinationPath. "/" . $fileName);
        while (file_exists($target_path)) {
            # code...
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $target_path = ( $destinationPath. "/" . $fileName);
        }
        Input::file('foto')->move($destinationPath, $fileName); // uploading file to given path

        DB::table('funcionario')
               ->where('id', $id)
               ->update(array('foto' => $fileName));
        }

        $autoriza=0;
        if (Input::get('autorizacao') === '1') {
            $autoriza=1;
        }

        DB::table('funcionario')
                ->where('id', $id)
                ->update(array('nome' => $request->get('nome'),
                    'morada' => $request->get('morada'),
                    'idade' => $request->get('idade'),
                    'bi' => $request->get('bi'),
                    'autorizacao' => $autoriza,
                    'local_de_trabalho' => $request->get('local_de_trabalho'),
                    'matricula' =>$request->get('matricula')));

        return redirect('lista_de_funcionario');

    }

    /**

    **/
    public function remove($id){

        DB::table('funcionario')->where('id', $id)->delete();

        return redirect('lista_de_funcionario')->with('message', 'Remoção do funcionario com sucesso!');

    }



    /**
     * @return \Illuminate\View\View
     */
    public function lista_funcionario(){
        //query para base de dados
        $funcionarios =DB::table('funcionario')
            ->paginate(10);
        return view('funcionario.funcionario',compact('funcionarios'));
    }


    /**
     * @return \Illuminate\View\View
     */
    public function lista_funcionario_outro(){
        //query para base de dados
        $funcionarios =DB::table('funcionario')
            ->get();
        return view('funcionario.funcionario_another',compact('funcionarios'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function adicionar_na_base_de_dados(FuncionarioRequest $request){
        $destinationPath = 'img'; // upload path
        $extension = Input::file('foto')
            ->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        $target_path = ( $destinationPath. "/" . $fileName);
        while (file_exists($target_path)) {
            # code...
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $target_path = ( $destinationPath. "/" . $fileName);
        }
        Input::file('foto')->move($destinationPath, $fileName); // uploading file to given path

        $autoriza=0;
        if (Input::get('autorizacao') === '1') {
            $autoriza=1;
        }

        DB::table('funcionario')->insert(['nome' => $request->get('nome'),
            'foto' => $fileName,
            'morada' => $request->get('morada'),
            'idade' => $request->get('idade'),
            'bi' => $request->get('bi'),
            'autorizacao' => $autoriza,
            'local_de_trabalho' => $request->get('local_de_trabalho'),
            'matricula' =>$request->get('matricula')]);


        return redirect('lista_de_funcionario');

    }

}
