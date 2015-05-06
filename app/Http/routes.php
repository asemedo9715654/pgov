<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');


//login

Route::get('/', 'LoginController@index');

Route::post('makelogin','LoginController@login');

Route::get('logout','LoginController@logout');

Route::get('mudar_palavra_passe','LoginController@muda_palavra_pssa');

//funcionario
Route::get('adicionar', ['middleware' => 'auth', 'uses' => 'FuncionarioController@adicionar']);



Route::get('lista_de_funcionario', ['middleware' => 'auth', 'uses' => 'FuncionarioController@lista_funcionario']);

Route::get('outro', ['middleware' => 'auth', 'uses' => 'FuncionarioController@lista_funcionario_outro']);

Route::patch('adicionar_na_base_de_dados','FuncionarioController@adicionar_na_base_de_dados');

Route::get('editar_funcionario{id}', ['middleware' => 'auth', 'uses' => 'FuncionarioController@editar']);

Route::patch('editar_funcionario{id}', ['middleware' => 'auth', 'uses' => 'FuncionarioController@update']);

Route::get('remover_funcionario{id}', ['middleware' => 'auth', 'uses' => 'FuncionarioController@remove']);

//Entradas e saidas
Route::get('lista_de_entrada_e_saida', ['middleware' => 'auth', 'uses' => 'EntradaSaidaController@entrada_e_saida']);


//api entradas
Route::post('api-entradas', 'EntradaSaidaController@criar_entrada');

//api funcionario
Route::get('api-lista-de-funcionario','FuncionarioController@api_lista_de_funcionario');








Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
