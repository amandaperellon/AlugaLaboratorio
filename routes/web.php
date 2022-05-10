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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alocacao', 'LocacaoController@aloca');

Route::get('/alocacao/mostra/{id}', 'LocacaoController@mostra');

Route::get('/alocacao/novo/{id}', 'LocacaoController@novo');

Route::get('/alocacao/adiciona/{id}', 'LocacaoController@adiciona');

Route::get('/usuario/login', 'UsuarioController@login');

Route::get('/usuario/verificalogin', 'UsuarioController@verificalogin');

Route::get('/usuario/novo', 'UsuarioController@novo');

Route::get('/usuario/adicionar', 'UsuarioController@adicionar');

Route::get('/admin/equipamentos/view', 'EquipamentosController@view');

Route::get('/admin/equipamentos/mostra/{id}', 'EquipamentosController@mostra');

Route::get('/admin/equipamentos/novo', 'EquipamentosController@novo');

Route::get('/admin/equipamentos/adicionar', 'EquipamentosController@adicionar');

Route::get('/admin/index/dashboard', 'UsuarioController@dashboard');

Route::get('/admin/local/view', 'LocalController@view');

Route::get('/admin/local/mostra/{id}', 'LocalController@mostra');

Route::get('/admin/local/novo', 'LocalController@novo');

Route::get('/admin/local/adicionar', 'LocalController@adicionar');