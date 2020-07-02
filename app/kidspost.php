<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kidspost extends Model
{
    protected $fillable = [
        'username',
        'userage',
        'tell',
        'useraddress',
    ];
}
