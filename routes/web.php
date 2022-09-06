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

    $nome = "Taris";
    $idade = 29;

    $arr = [1, 2, 3, 4, 5];
    $nomes = ["Taris", "Maria", "João", "Saulo"];

    return view('welcome', [
        'nome' => $nome,
        'idade2' => $idade,
        'profissao' => "Programador",
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});

Route::get('/contatos', function () {
    return view('contatos');
});

Route::get('/produtos', function () {

    $busca = request('search');


    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});