<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_users extends Model
{
   protected $fillable = [
        'name', 'email', 'password',
    ];
}
