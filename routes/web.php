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

Route::get('/loja/{nome}', 'LojaController@paginaLoja');

Auth::routes(['verify' => true]);

Route::middleware('verified')->group( function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/loja', 'HomeController@definicoesLoja')->name('home.loja');
    Route::post('/loja', 'HomeController@adicionarLoja')->name('home.addLoja');
});

