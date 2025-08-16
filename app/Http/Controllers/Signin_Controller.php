<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use function Laravel\Prompts\error;

class Signin_Controller extends Controller
{
    public function signin_submit(Request $request)
    {
        // return $request;
        // unique:users,email
        $signin_data = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            
        ]);

        if ($signin_data) {

            User::create($signin_data);
            return redirect()->back()->with('alert', 'succesful');


        } else {
            return redirect()->back()->with('alert', 'not_succesful');

        }

    }
}
