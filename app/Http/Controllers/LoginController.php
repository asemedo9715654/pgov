<?php namespace App\Http\Controllers;


use App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Input;


class LoginController extends Controller {

	 /**
     * Display a listing of the resource.
     *
     * @return Response to index
     */
    public function index()
    {
        if (Auth::check())
        {
            // The user is logged in...
            return redirect('lista_de_funcionario');
        }
        return view('login.index');
    }

    /**
     * @param Request $request
     * @return mixed with success or insucess
     */
    public function login(Request $request){

        $user=array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        if(Auth::attempt($user)){
            return redirect('lista_de_funcionario')->with('message','you are logged!');
        }else{
            return redirect('/')->with('message','login fail please try again!');
        }
    }

    /**
     * @return Redirect to login route
     */
    public function logout(){

        Auth::logout(); // log the user out of our application
        return redirect('/');

    }

    /**
     * @return \Illuminate\View\View
     */
    public function muda_palavra_pssa(){
        return view('login.muda_palavra_passe');
    }


}
