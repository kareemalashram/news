<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attachments extends Model
{
    //

    protected $fillable = [
        'old_name', 'new_name', 'path','type', 'size','user_id',
    ];

}
