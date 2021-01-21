<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_locs extends Model
{
    protected $fillable = [
        'user_id', 'lat','lng','created_at','updated_at'
    ];
}