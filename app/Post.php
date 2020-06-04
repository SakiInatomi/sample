<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'age',
        'seibetu',
        'juusyo',
        'categoly',
        'content',
        'image',
    ];
}
