<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    //
    protected $table = 'exchange';
    protected $fillable = [
        'desc', 'description', 'price', 'user_id','books_id'
    ];
  
}
