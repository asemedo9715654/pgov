<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class VeiculoRequest extends Request {

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
			'foto'=>'required|Image|Mimes:jpeg,jpg,bmp,png,gif',
            'matricula'=>'required|Min:6|Max:20',
            'ano_fabrico'=>'required|Integer',
            'marca'=>'required'
		];
	}

}
