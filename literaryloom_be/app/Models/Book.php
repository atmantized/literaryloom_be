<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'price',
        'author',
        'category',
        'image',
        'detail',
        'synopsis',
        'description',
        'format',
        'published',
        'isbn',
        'language',
        'quantity'
    ];

}
