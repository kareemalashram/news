<?php

namespace App\Http\Controllers;

use App\Poste;
use App\catgory;
use App\weater;
use App\course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class ApiController extends Controller
{


    public function get_cats (){
        $cats = catgory::all();
        return response($cats);
    }

    public function delete_cat($id){
        $res = catgory::where('id', $id)->get()->first()->delete();

        if($res){
            return ['status'=>1];
        }else{
            return ['status'=>0];
        }

    }


    public function delete_post($id){
        $res = Poste::where('id', $id)->get()->first()->delete();

        if($res){
            return ['status'=>1];
        }else{
            return ['status'=>0];
        }

    }


    public function delete_courses($id){
        $res = course::where('id', $id)->get()->first()->delete();

        if($res){
            return ['status'=>1];
        }else{
            return ['status'=>0];
        }

    }

    public function delete_weather($id){
        $res = weater::where('id', $id)->get()->first()->delete();

        if($res){
            return ['status'=>1];
        }else{
            return ['status'=>0];
        }

    }

    public function add_course(Request $request){
        course::create($request->all());
        return ['status' => 1];

    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
