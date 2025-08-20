<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Notifications\UserMail;



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

            // $user = User::create($signin_data);
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // $user->notify(new UserMail());

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


        if (Auth::guard('user')->attempt($login_data)) {

            return redirect('/home');

        } else {
            return redirect()->back()->with('alert', 'not_succesful');
        }

    }

    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect('/login');
    }

    public function home_check()
    {
        if (Auth::guard('user')->check()) {
            return view('userpanel.home');
        } else {
            return redirect('/login');
        }
    }

}
