<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora(Type $var = null)
    {
        return view('calculadora');
    }
    public function soma(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $result = $num1 + $num2;
        return view('resultado', compact('result'));
    }
}
