<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class college extends Model
{
    protected $fillable = [
        'clgname', 'clgshort', 'email','newpass',
    ];
}
