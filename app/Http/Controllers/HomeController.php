<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Type $var = null)
    {
        return view('index');
    }
    public function classes($job)
    {
        return view('classes',compact('job'));
    }
    public function pokemon($nome)
    {
        return view('pokemon',compact('nome'));
    }
}
