<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; 

    protected $table = 'posts';

    // Esto último es opcional, pues de por sí trabajará con una convención:
    // Si el model se llama Post, la tabla será posts (minúscula plural-inglés)
    // EJ: Category -> categories

    //
}
