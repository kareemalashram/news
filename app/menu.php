<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    //

    protected $fillable = [
        'name', 'route_name', 'menu','active', 'user_role','inde',
    ];

}
