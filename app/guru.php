<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
     protected $hidden = [
        'password', 'remember_token',
    ];
}
