<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $table = 'books';

    protected $guarded = [
        'user_id'
    ];
}
