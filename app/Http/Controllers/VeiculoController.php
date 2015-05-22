<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\VeiculoRequest;
use DB;
use Input;
use Illuminate\Http\Request;

class VeiculoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function lista()
	{
        //query para base de dados
        $veiculos =DB::table('veiculo')
            ->paginate(10);
        return view('veiculo.veiculo',compact('veiculos'));
	}

    /**
     * @return \Illuminate\View\View
     */
    public function adicionar()
    {
        return view('veiculo.adicionar');
    }


    /**
     * @param VeiculoRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function adicionar_veiculo_na_db(VeiculoRequest $request){

        $destinationPath = 'img/veiculos'; // upload path
        $extension = Input::file('foto')
            ->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        $target_path = ( $destinationPath. "/" . $fileName);
        while (file_exists($target_path)) {
            # code...
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $target_path = ( $destinationPath. "/" . $fileName);
        }
        Input::file('foto')->move($destinationPath, $fileName);

        DB::table('veiculo')->insert(['foto' => $fileName,
            'marca' => $request->get('marca'),
            'matricula' => $request->get('matricula'),
            'ano_fabrico' => $request->get('ano_fabrico')]);

        return redirect('lista_de_veiculos');

    }


    /**
    *
    *
    */
    public function editar_na_db($id,Request $request){
        
        if($request->get('foto')!=null){

            $destinationPath = 'img/veiculos'; // upload path
            $extension = Input::file('foto')
                ->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $target_path = ( $destinationPath. "/" . $fileName);
            while (file_exists($target_path)) {
                # code...
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                $target_path = ( $destinationPath. "/" . $fileName);
            }

            Input::file('foto')->move($destinationPath, $fileName);
            DB::table('veiculo')
                   ->where('id', $id)
                   ->update(array('foto' => $fileName));

        }

        DB::table('veiculo')
               ->where('id', $id)
               ->update(array('marca'=> $request->get('marca'),
               'matricula'=> $request->get('matricula'),
               'ano_fabrico'=> $request->get('ano_fabrico')
               ));

        return redirect('lista_de_veiculos');


    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function editar($id)
    {
        $veiculo = DB::table('veiculo')->where('id', $id)
            ->first();
        return view('veiculo.editar',compact('veiculo'));

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remover($id)
    {
        DB::table('veiculo')->where('id', $id)->delete();

        return redirect('lista_de_veiculos')->with('message', 'Remoção do veiculo com sucesso!');
    }

}
