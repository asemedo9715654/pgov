<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class FuncionarioRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
            'nome'=>'required|Min:4|Max:80',
            'idade'=>'required|Integer|Min:18',
            'foto'=>'required|Image|Mimes:jpeg,jpg,bmp,png,gif',
            'morada'=>'required|Min:4|Max:90',
            'bi'=>'required|Integer',
            'local_de_trabalho'=>'required|Min:10|Max:200',
            'matricula'=>'required|Min:4|Max:20'
		];
	}

}
