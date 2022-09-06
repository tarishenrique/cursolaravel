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

    return view('welcome', ['nome' => $nome, 'idade2' => $idade, 'profissao' => "Programador"]);
});

Route::get('/contatos', function () {
    return view('contatos');
});

Route::get('/produtos', function () {
    return view('products');
});