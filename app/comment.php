<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{

    protected $fillable = [
        'title','user_name','text','post_id','email','course_id',
    ];
}
