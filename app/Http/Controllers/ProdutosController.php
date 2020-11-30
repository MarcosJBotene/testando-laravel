<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function Index()
    {
        $a = 10;
        $b = 10;

        $resultado = $a + $b;

        $arrayNumeros = [];
        $arrayNumeros['num1'] = $resultado;
        $arrayNumeros['num2'] = $a;

        return view('produtos.index', compact('resultado', 'arrayNumeros'));
    }
}
