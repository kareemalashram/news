<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attachments;

class Imagelibercontroller extends Controller
{
    public function ssssds (){
        $attch = attachments::all();
        return view('imagelibray.ssssds' , compact('attch'));
    }
}
