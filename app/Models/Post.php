<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; 

    // protected $table = 'posts';

    // Esto último es opcional, pues de por sí trabajará con una convención:
    // Si el model se llama Post, la tabla será posts (minúscula plural-inglés)
    // EJ: Category -> categories

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    //
    protected function title(): Attribute
    {
        return Attribute::make(
            //mutador
            set: function($value){
                return strtolower($value);
            },
            //accesor
            get: function($value)
            {
                return ucfirst($value);
            }
        );
    }

}
