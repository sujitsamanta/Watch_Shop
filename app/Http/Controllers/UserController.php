<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Notifications\UserMail;
use App\Http\Middleware\UserMiddleware;


class UserController extends Controller
{
    public function signin_submit(Request $request)
    {
        $signin_data = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|confirmed',
            
        ]);

        if ($signin_data) {

            $user=User::create($signin_data);
            
            $user->notify(new UserMail());

            return redirect()->back()->with('alert', 'succesful');


        } else {
            return redirect()->back()->with('alert', 'not_succesful');

        }

    }
    public function login_submit(Request $request)
    {
        $login_data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);


        if (Auth::attempt($login_data)) {
           
            return redirect('/');

        }

        else {
            return redirect()->back()->with('alert', 'not_succesful');
        }

    }

    public function log_out(Request $request){
        Auth::logout();
        return redirect('/log_in');
    }

    public function home_check(){
        if(Auth::check()){
            return view('userpanel.home');
        }
        else{
            return redirect('/log_in');
        }
    }

}
