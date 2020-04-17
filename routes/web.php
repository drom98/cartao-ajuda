<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cartao/getCodigo/{id}', 'CartaoController@getCodigo');
Route::get('/cartao/ativarCartao/{id}', 'CartaoController@ativarCartao');

Route::get('/store/{url}', 'NegocioController@index')->name('negocio.front');
Route::get('/store/getOpcao/{id}', 'NegocioController@getOpcao');
Route::post('/cartao', 'CartaoController@store');

Auth::routes(['verify' => true]);

Route::middleware('verified')->group( function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/settings', 'HomeController@definicoesNegocio')->name('negocio.home');
    Route::post('/settings', 'HomeController@editarNegocio')->name('negocio.editar');
});

