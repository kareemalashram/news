<?php

namespace App\Http\Controllers;

use App\course;
use App\Poste;
use App\catgory;
use App\attachments;
use App\weater;
use App\courses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashbord.home');

    }


    public function show_news(Request $request)
    {
        if (isset($_GET['active'])){
            $active = $_GET['active'];
            $post_id = $_GET['post_id'];
            $post = Poste::find($post_id);

            if ($active == 0){
                $post->status = 1;
            }else{
                $post->status =0;
            }
            $post->save ();

        }
        $news = Poste::all();
        return view('dashbord.news.show',compact('news'));
    }

    public function add_news(Request $request)
    {

        if ($request->post()){

            $allow_extension = ['jpg','pdf','jpeg','png'];
            $image           = $request->file('post_image');
            if ($image !=null ){


                $image_ex        = $image->getClientOriginalExtension();
                $old_name        = $image->getClientOriginalName();
                $image_size       = $image->getSize();
                $rand_num        =date('dmy'). rand(11111111111,99999999999);
                $image_name      = $rand_num . '.'. $image_ex;
                $target_file     = 'uploads/image';
                if (in_array($image_ex , $allow_extension)){
                    $request->post_image->move(public_path($target_file),$image_name);
                    $image_map = $target_file . '/'. $image_name;
                   $image_id= attachments::insertGetId([
                        'old_name' => $old_name ,
                        'new_name' => $image_name ,
                        'path' => $image_map ,
                        'type' => $image_ex ,
                        'size' => $image_size ,
                        'user_id' => Auth::user()->id,
                    ]);

                }else{
                    dd('no');
                }

            }else{
                $image_id = null;
            }
            $title=$request->post('title');
            $content=$request->post('content');
            $catagorey=$request->post('catagorey');
            $auth= Auth::user()->id;
            Poste::create([
                'title'=> $title,
                'descrition'=> $content,
                'catagorey'=> $catagorey,
                'auter'=> $auth,
                'image'=> $image_id,
            ]);
        }

        $cats= catgory::all();

        return view('dashbord.news.add',compact('cats'));
    }

    public function edit_news(Request $request , $id){
        if ($request->post()){
            $post = Poste::find($id);


            $allow_extension = ['jpg','pdf','jpeg','png'];
            $image           = $request->file('post_image');
            if ($image !=null ){


            $image_ex        = $image->getClientOriginalExtension();
            $rand_num        =date('dmy'). rand(11111111111,99999999999);
            $image_name      = $rand_num . '.'. $image_ex;
            $target_file     = 'uploads/image';
            if (in_array($image_ex , $allow_extension)){
                $request->post_image->move(public_path($target_file),$image_name);
                $image_map = $target_file . '/'. $image_name;

            }else{
                dd('no');
            }
                $post->image     = $image_map;

            }
            $title=$request->post('title');
            $content=$request->post('content');
            $catagorey=$request->post('catagorey');




            $post->title = $title;
            $post->descrition = $content;
            $post->catagorey = $catagorey;
            $post->save();

        }

        $news = Poste::where('id' , $id)->get() ->first();
        $cats= catgory::all();

        return view('dashbord.news.edit',compact('news','cats'));

    }




    public function show_courses(Request $request)
    {
        if (isset($_GET['active'])){
            $active = $_GET['active'];
            $post_id = $_GET['post_id'];
            $post = course::find($post_id);

            if ($active == 0){
                $post->status = 1;
            }else{
                $post->status =0;
            }
            $post->save ();

        }
        $courses = course::paginate(4);
        return view('dashbord.courses.show',compact('courses'));
    }

    public function add_courses(Request $request)
    {
        $result = false;
        if ($request->post()){

            $allow_extension = ['jpg','pdf','jpeg','png'];
            $image           = $request->file('post_image');
            if ($image !=null ){


                $image_ex        = $image->getClientOriginalExtension();
                $old_name        = $image->getClientOriginalName();
                $image_size       = $image->getSize();
                $rand_num        =date('dmy'). rand(11111111111,99999999999);
                $image_name      = $rand_num . '.'. $image_ex;
                $target_file     = 'uploads/image';
                if (in_array($image_ex , $allow_extension)){
                    $request->post_image->move(public_path($target_file),$image_name);
                    $image_map = $target_file . '/'. $image_name;
                   $image_id= attachments::insertGetId([
                        'old_name' => $old_name ,
                        'new_name' => $image_name ,
                        'path' => $image_map ,
                        'type' => $image_ex ,
                        'size' => $image_size ,
                        'user_id' => Auth::user()->id,
                    ]);

                }else{
                    dd('no');
                }

            }else{
                $image_id = null;
            }
            $title         =$request->post('title');
            $content       =$request->post('content');
            $course_date   =$request->post('course_date');
            $result = course::create([
                'name'=> $title,
                'descrption'=> $content,
                 'course_date'=> $course_date,
                'image'=> $image_id,
            ]);
        }


        return view('dashbord.courses.add', compact('result'));
    }

    public function edit_courses(Request $request , $id){
        if ($request->post()){
            $post = course::find($id);


            $allow_extension = ['jpg','pdf','jpeg','png'];
            $image           = $request->file('post_image');
            if ($image !=null ){


                $image_ex        = $image->getClientOriginalExtension();
                $old_name        = $image->getClientOriginalName();
                $image_size       = $image->getSize();
                $rand_num        =date('dmy'). rand(11111111111,99999999999);
                $image_name      = $rand_num . '.'. $image_ex;
                $target_file     = 'uploads/image';
                if (in_array($image_ex , $allow_extension)){
                    $request->post_image->move(public_path($target_file),$image_name);
                    $image_map = $target_file . '/'. $image_name;
                    $image_id= attachments::insertGetId([
                        'old_name' => $old_name ,
                        'new_name' => $image_name ,
                        'path' => $image_map ,
                        'type' => $image_ex ,
                        'size' => $image_size ,
                        'user_id' => Auth::user()->id,
                    ]);
                    $post->image = $image_id;

                }else{
                    dd('no');
                }

            }else{
                $image_id = null;
            }


            $post->name =$request->post('title');
            $post->descrption = $request->post('content');
            $post->course_date = $request->post('course_date');
            $post->save();

        }

        $course = course::where('id' , $id)->get() ->first();

        return view('dashbord.courses.edit', compact('course'));

    }



     public function add_catgory(Request $request){
        if ($request->post()){
            $name=$request->post('name');
            $descrition=$request->post('descrition');

            $res=catgory::create([
                'name'       =>$name,
                'descrition'=>$descrition,
                'by_user' =>Auth::user() ->id,

            ]);

            if ($res){

                return [
                    'status' => 1,
                    'name' => $name,
                    'descritione'=>$descrition,
                ];

            }else{
                return ['status' => 0];

            }

        }


        $cats= catgory::all();


         return view('dashbord.catgory.add',compact('cats'));
     }





    public function show_catgory(){


        $cats= catgory::all();

        return view('dashbord.catgory.show',compact('cats'));
    }







    public function show_weather()
    {

        $news = weater::all();
        return view('dashbord.weather.show',compact('news'));
    }


    public function add_weather(Request $request)
    {
        if ($request->post()){
            $title=$request->post('title');
            $content=$request->post('content');
            $catagorey=$request->post('catagorey');
            $auth= Auth::user()->id;
            weater::create([
                'title'=> $title,
                'descrition'=> $content,
                'catgory'=> $catagorey,
                'auter'=> $auth,
            ]);
        }

        $cats= catgory::all();

        return view('dashbord.weather.add',compact('cats'));
    }




    public function edit_weather(Request $request , $id){
        if ($request->post()){
            $title=$request->post('title');
            $content=$request->post('content');
            $catagorey=$request->post('catagorey');

            $post =weater::find($id);
            $post->title = $title;
            $post->descrition = $content;
            $post->catgory = $catagorey;
            $post->save();

        }

        $news = weater::where('id' , $id)->get() ->first();
        $cats= catgory::all();

        return view('dashbord.weather.edit',compact('news','cats'));

    }







    public function __construct()
    {
        $this->middleware('auth');
    }




}
