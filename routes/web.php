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

use App\Http\Controllers\PessoaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('add', 'PessoaController@create')->name('addpessoa');
Route::get('listarPessoa', 'PessoaController@index')->name('listpessoa');
Route::post('cadpessoa', 'PessoaController@store')->name('cadpessoa');
Route::delete('delpessoa/{id}', 'PessoaController@destroy')->name('delpessoa');




