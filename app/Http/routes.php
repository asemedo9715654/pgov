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


//veiculos

Route::get('lista_de_veiculos', 'VeiculoController@lista');

Route::get('adicionar_veiculo', 'VeiculoController@adicionar');

Route::patch('adicionar_veiculo_db', 'VeiculoController@adicionar_veiculo_na_db');

Route::get('editar_veiculo/{id}', 'VeiculoController@editar');

Route::patch('editar_veiculo_db/{id}', 'VeiculoController@editar_na_db');


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

Route::get('editar_funcionario/{id}', 'FuncionarioController@editar');

Route::patch('editar_funcionario/{id}',  'FuncionarioController@update');

Route::get('remover_funcionario/{id}', ['middleware' => 'auth', 'uses' => 'FuncionarioController@remove']);

//Entradas e saidas
Route::get('lista_de_entrada_e_saida', ['middleware' => 'auth', 'uses' => 'EntradaSaidaController@entrada_e_saida']);


//api entradas
Route::get('api-entradas/{id_f}', 'EntradaSaidaController@criar_entrada');

//api funcionario
Route::get('api-um-funcionario/{matricula}','FuncionarioController@api_lista_de_funcionario');
//todos os funcionario
Route::get('api-todos-funcionarios','FuncionarioController@api_todos_funcinario');

//saidas --registro_de_saida
Route::get('api-saida/{id}', ['middleware' => 'auth', 'uses' => 'EntradaSaidaController@registro_de_saida']);







Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
