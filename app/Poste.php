<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    //

    protected $fillable = [
        'title', 'descrition', 'catagorey','status', 'auter','image',
    ];

}
