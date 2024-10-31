<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
{
    $valor = 10.00;
    $nomeProduto = "Sabonete"
    return view('produtoTeste', ['nomeProduto' => $nomeProduto], ['valor' => $valor]);
}
public function show($id)
{
return "Apresentando o produto de id: {$id}";
}

}
