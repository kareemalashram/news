<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //

    protected $fillable = [
        'name', 'descrption', 'course_date','status', 'image',
    ];

}
