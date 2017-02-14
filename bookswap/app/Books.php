<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $table = 'books';

    protected $fillable = [
        'title', 'author', 'edition','ISBN','publisher'
    ];
}
