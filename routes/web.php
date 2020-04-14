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

Route::get('/store/{url}', 'CartaoController@create')->name('cartao.front');
Route::post('/cartao', 'CartaoController@store');

Auth::routes(['verify' => true]);

Route::middleware('verified')->group( function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/settings', 'HomeController@definicoesNegocio')->name('loja.home');
    Route::post('/settings', 'HomeController@editarNegocio')->name('loja.editar');
});

