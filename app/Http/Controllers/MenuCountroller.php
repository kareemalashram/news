<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\menu;

class MenuCountroller extends Controller
{
    public function add_new_menu(Request $request){
        if ($request->post()){
            menu::create ([
                'name'=> $request->post('name'),
                'route_name'=> $request->post('route_name'),
                'menu'=> $request->post('menu'),
                'user_role'=> json_encode($request->post('role')),
                'inde'=> $request->post('inde'),
            ]);
            return ['data'=>$request->all()];
        }
        return view('dashbord.menu.add_menu');
    }

    public function show_new_menu(Request $request){

        return view('dashbord.menu.show_menu');
    }
}
