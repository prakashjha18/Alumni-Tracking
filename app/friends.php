<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class friends extends Model
{
    protected $fillable = [
        'id','user_id','friend_id','status','created_at','updated_at',
    ];
}
