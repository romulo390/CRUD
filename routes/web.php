<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/index','PessoaController@index');
Route::post('/pessoa/inserir','PessoaController@salvar')->name("pessoa.inserir");
Route::get('/listaPC','PessoaController@pessoasCadastradas');
Route::get('/editar/{id}','PessoaController@EditarPessoa');
Route::post('/atualizar/{id}','PessoaController@postAtualizar');
*/


Route::get('/index','PessoaController@index');
Route::post('/pessoa/inserir','PessoaController@salvar');
Route::get('/listaPC','PessoaController@pessoasCadastradas');
Route::get('/editar/{id}','PessoaController@editarPessoa');
Route::post('/atualizar/{id}','PessoaController@pessoaAtualizar');
Route::get('/remover/{id}','PessoaController@pessoaRemover');