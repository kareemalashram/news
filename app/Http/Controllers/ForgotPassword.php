<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Sentinel;
use Illuminate\Database\Capsule\Manager as Capsule;
use Reminder;
use Maill;


class ForgotPassword extends Controller
{
   public function forgot(){
       return view('auth.forgot');
   }

   public function password(Request $request){
       $user = User::whereEmail($request->email)->first();

       if ($user == null){
           return redirect()->back()->with(['error' => 'Email not exists']);
       }
       $user = Sentinel::findById($user->id);
       $reminder = Reminder::exists($user) ? : Reminder::create($user);
       $this->sendEmail($user, $reminder->code);

       return redirect()->back()->with(['success'=> 'Rest code sent to your email.']);


   }
   public function sendEmail($user, $code){
       Mail::send('email.forgot',
           ['user'=>$user, 'code'=>$code],
           function ($message) use ($user){
           $message->to($user->email);
           $message->subject("$user->name,rest your password.");
           }
       );
   }
}
