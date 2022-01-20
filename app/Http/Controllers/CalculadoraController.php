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
        
        $v1 = $request->num1;
        $v2 = $request->num2;
        $operador = $request->operador;
        
        switch ($operador) {
            case 'soma':
                $result = $v1 + $v2;
                break;
            case 'multi':
                $result = $v1 * $v2;
                break;
            case 'div':
                if ($v2 > 0 ){
                    $result = $v1 / $v2;
                }else{
                    $result = 0;
                }
                break;
            case 'sub':
                $result = $v1 - $v2;
                break;
            }
        return view('resultado', compact('result'));
    }
}
