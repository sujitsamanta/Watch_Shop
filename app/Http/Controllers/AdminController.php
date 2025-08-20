<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
     public function admin_login(Request $request)  {
        // view('admin_home');
        $login_data = $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);
         if (Auth::guard('admin')->attempt($login_data)) {

            return redirect('/admin_home');

        } else {
            return redirect()->back()->with('alert', 'not_succesful');
        }

    }

     public function admin_logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin_login');
     }
    public function admin_check()  {
        //  if (Auth::guard('admin')->check()) {
        return view('adminpanel.admin_home');
            
        // } else {
        //     return redirect('/admin_login');
        // }
    }
}
