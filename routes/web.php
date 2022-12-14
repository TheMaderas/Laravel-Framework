<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::post('/enviar', function(Illuminate\Http\Request $request){
    $produtos = new App\Models\Produtos();
    $produtos -> cdproduto = $request->get('cdproduto');
    $produtos -> nproduto = $request->get('nproduto');
    $produtos -> ncategoria = $request->get('ncategoria');
    $produtos -> punitario = $request->get('punitario');
    $produtos -> cdescricao = $request->get('cdescricao');

    $produtos -> save();

    echo "Os Produtos foram inseridos com sucesso". $produtos -> id;
    //header("Refresh:0; url=lista.blade.php");
});

Route::get('/lista', function(){
    return view('lista', array('produtos' => App\Models\Produtos::all()));
});