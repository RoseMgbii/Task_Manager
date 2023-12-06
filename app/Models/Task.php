<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //like typecasting;
    //make sure the value seen on view is shown as actual boolean not 0 or 1
    //if you don't do this 'is_done' will be viewed as 0 or 1 even though it's a boolean value
    protected $casts = [
      'is_done' => 'boolean'
    ];


    //to hide certain fields
    protected $hidden = [
        'updated_at',
    ];

}


