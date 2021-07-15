<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catgory extends Model
{

    protected $fillable = [
        'name','descrition','by_user',
    ];

}
