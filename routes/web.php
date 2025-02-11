<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//Route::get('/', [HomeController::class, 'index']);
Route::get('/', HomeController::class); //no lleva el método pues __invoke() es el único

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('prueba', function(){
    /*
    Crear nuevo post
    
    $post = new Post;
    $post->title = 'Título de prueba 3';
    $post->content = 'Contenido de prueba 3';
    $post->category = 'Categoría de prueba 3';

    $post->save();

    return $post;

    */
    


    // $post = Post::find(1);

    /*
    $post = Post::where('title', 'Título de prueba 1')
                ->first();
    $post->category = "Desarrollo Web";
    $post->save();
    */

    /*
    $post = Post::all();
    return $post;
    */

    /*
    $posts = Post::where('id', '>=', '2')
                        ->get();
    return $posts;
    */
    /*
    $posts = Post::orderBy('id', 'desc')
                    ->get();
    return $posts;
    */
    /* Listar todos los posts
    $posts = Post::orderBy('id', 'desc')
                    ->select('id', 'title', 'category')
                    //->take(2) //para obtener solo 2 registros
                    ->get();
    return $posts;
    */
});



// una Route puede ser de tipo: get, post, put, patch, delete