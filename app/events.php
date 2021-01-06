<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $fillable = [
        'title', 'date', 'description', 'image', 'mode', 'college', 'user_id', 'created_at',
    ];
}