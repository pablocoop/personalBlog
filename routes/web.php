<?php

use Illuminate\Support\Facades\Route;
// http://localhost/laravel/blog/public/
Route::get('/', function () {
    return "view('welcome')";
});

// una Route puede ser de tipo: get, post, put, patch, delete