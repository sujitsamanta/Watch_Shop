<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Notifications\UserMail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\DB;



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

            // $user = User::create($signin_data);`
            $user = User::create($signin_data);

            // $user = User::where('email', $request->email)->first();

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

            return redirect('/home');

        } else {
            return redirect()->back()->with('alert', 'not_succesful');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function home_check()
    {
        return view('userpanel.home');
    }


    public function account_check()
    {
        $user_data = Auth::user();
        return view('userpanel.account', compact('user_data'));

    }

    public function account_upadate(Request $request)
    {
        $account_data = $request->validate([
            'name' => 'string|max:50',
            'phone' => 'nullable|integer|min:15',
            'dob' => 'nullable|date',
            'address' => 'nullable|string|max:100',
            'bio' => 'nullable|string|max:100',
        ]);

        $user = Auth::user();
        // return $user->id;
        $user = DB::table('users')->where('id', $user->id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'username' => $request->username,
            'address' => $request->address,
            'bio' => $request->bio,
        ]);

        // /** @var \App\Models\User $user */
        // auth()->user()?->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        // ]);


        return redirect()->back()->with('alert', 'succesful');

    }

    public function account_photo_update(Request $request)
    {

        //  $request->validate([
        // 'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);



        $path = $request->file('photo')->store('photos', 'public');
        ;

        $patharrey = explode('/', $path);

        $img_name = $patharrey[1];

        $user = Auth::user();

        // return $user->id;

        $user = DB::table('users')->where('id', $user->id)->update([
            'photo' => $patharrey[1],

        ]);

        return redirect()->back()->with('alert', 'succesful');




    }
}
