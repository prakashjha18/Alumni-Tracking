<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    protected $fillable = [
        'id','name','resume','email', 'created_at', 'updated_at',
    ];
}
