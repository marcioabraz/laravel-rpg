<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora()
    {
        return view('calculadora');
    }
    public function calcular(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $operador = $request->operador;
        $result = $num1 + $num2;
        return view('resultado', compact('result'));
    }
}
