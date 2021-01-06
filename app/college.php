<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class college extends Model
{
    protected $fillable = [
        'title', 'date', 'description', 'image', 'mode','college',
    ];
}
