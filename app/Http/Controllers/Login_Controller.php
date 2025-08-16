<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class Login_Controller extends Controller
{
      public function login_submit(Request $request)
    {
        // return $request;
        // unique:users,email
        $login_data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            
        ]);

        if ($login_data) {
            return $request;

            // User::create($login_data);
            // return redirect()->back()->with('alert', 'succesful');


        } else {
            // return redirect()->back()->with('alert', 'not_succesful');

        }

    }
}
