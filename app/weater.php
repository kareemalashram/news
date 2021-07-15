<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weater extends Model
{
    protected $fillable = [
        'title', 'descrition', 'catgory', 'auter',
    ];
}
