<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{   
    // index()
    public function __invoke() //solo para controlador de un solo método
    {
        // return view('home');
        return view('Home');
    }
    //
}
