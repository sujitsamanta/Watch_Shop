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

            // notify()->success('Account created succesfuly ⚡️');
            flash()->addSuccess('Account created succesfuly ⚡️');

            return redirect('/login');
            // return redirect()->back();


        } else {
            // notify()->error('Enter curect data ⚡️');
            flash()->addError('Account created succesfuly ⚡️');

            return redirect()->back();
            // return redirect()->back()->with('alert', 'not_succesful');

        }

    }
    public function login_submit(Request $request){
    
        $login_data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);


        if (Auth::attempt($login_data)) {

            // notify()->success('Welcome to Watch Shop..⚡️');
            // flash('Your account has been reactivated.');

            // flash('Your account has been reactivated.');

            flash()->addSuccess('Welcome to Watch Shop..⚡️');

            return redirect('/home');

        } else {

            // notify()->error('Enter curect data ⚡️');
            flash()->addError('Enter curect data ⚡️');


            return redirect()->back();
            // return redirect()->back()->with('alert', 'not_succesful');
        }

    }

    public function logout()
    {
        Auth::logout();

        // notify()->success('Sign Out Succesfuly..⚡️');
        flash()->addSuccess('Sign Out Succesfuly..⚡️');

        return redirect('/login');
    }

    public function home_check()
    {
        if (Auth::check()) {
            // notify()->success('Welcome to Watch Shop.. ⚡️');
            return view('userpanel.home');
        } else {

            // notify()->error('Login now ⚡️');
            return view('userpanel.home-x');
        }

        // return view('userpanel.home');
    }


    public function account_check()
    {
        $user_data = Auth::user();
        return view('userpanel.account', compact('user_data'));

    }

    public function account_upadate(Request $request)
    {
        $account_data = $request->validate([
            'name' => 'required|string|max:50',
            'phone' => 'nullable|integer|min:15',
            'dob' => 'nullable|date',
            'username' => 'required|string|max:50',
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

        // notify()->success('Account Update Succesfuly..⚡️');
        flash()->addSuccess('Account Update Succesfuly..⚡️');

        return redirect()->back();

    }

    public function account_photo_update(Request $request)
    {

        if ($request->photo) {
            $path = $request->file('photo')->store('photos', 'public');
            $patharrey = explode('/', $path);
            $img_name = $patharrey[1];

            $user = Auth::user();
            $user = DB::table('users')->where('id', $user->id)->update([
                'photo' => $img_name,

            ]);

            // notify()->success('Photo Update Succesful..⚡️');
            flash()->addSuccess('Photo Update Succesful..⚡️');
            return redirect()->back();

        } else {
            $user = Auth::user();
            $user = DB::table('users')->where('id', $user->id)->update([
                'photo' => null,

            ]);

            // notify()->success('Photo Update Succesful..⚡️');
            flash()->addSuccess('Photo Update Succesful..⚡️');

            return redirect()->back();
        }


    }


}
