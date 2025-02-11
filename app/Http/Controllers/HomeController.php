<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{   
    // index()
    public function __invoke() //solo para controlador de un solo método
    {
        return "Welcome to the homepage";
    }
    //
}
