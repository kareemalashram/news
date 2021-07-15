<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainee extends Model
{

    protected $fillable = [
        'full_name','email','address','mobile','birthday','course_id ',
    ];
}
