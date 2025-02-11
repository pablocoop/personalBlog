<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

// http://localhost/laravel/blog/public/

//Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class]); //no lleva el método pues __invoke() es el único

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);



// una Route puede ser de tipo: get, post, put, patch, delete