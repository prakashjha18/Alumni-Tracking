<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class internships extends Model
{
    protected $fillable = [
        'id','title','address','image', 'user_id','company_name','company_headquater', 'address','skills_req', 'job_desc', 'date', 'created_at', 'updated_at',
    ];
}
