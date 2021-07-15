<?php

namespace App\Http\Controllers;

use App\course;
use Illuminate\Http\Request;
use App\Poste;
use App\weater;
use App\comment;
use App\trainee;
class HomeController extends Controller
{

//    public function ca()
//    {
//        return view('homee');
//    }



    public function kareem()
    {
        $news = Poste::where('status','=',1)->get();
        $weather = weater::all();

        return view('ash' , compact('news','weather'));
    }


    public function single_post(Request $request ,$id)
    {
        if ($request->post()){
            $data = $request->all();
            $data['post_id'] = $id;
            comment::create($data);
        }

        $post = Poste::where('id', '=' ,$id)->get()->first();
        return view('single_post', compact('post'));
    }


    public function single_course(Request $request ,$id)
    {
        if ($request->post()){
            $data = $request->all();
            $data['course_id'] = $id;
            comment::create($data);
        }

        $post = course::where('id', '=' ,$id)->get()->first();
        return view('single_course', compact('post'));
    }
    public function register_new_tranee(Request $request , $course_id){
        if ($request->post()){
            $data = $request->all();
            $data['course_id'] = $course_id;
            $res = trainee::create($data);
            if ($res){
                return ['status' => true];
            }else{
                return ['status' => false];

            }
        }
    }


    public function weather_single($id)
    {
        $weather = weater::where('id', '=' ,$id)->get()->first();
        return view('weather_single', compact('weather'));
    }




    public function raisa()
    {
        return view('welcome');
    }


    public function courese()
    {
        return view('courese');
    }




}
