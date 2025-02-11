<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Aquí se mostrarán los posts";
    }

    public function create()
    {
        return "Aquí se muestra el formulario";
    }

    public function show($post)
    {
        return "Aquí se mostrará el post {$post}";
    }

    //
}
