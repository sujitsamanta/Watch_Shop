<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    public function admin_login(Request $request)
    {
        // view('admin_home');
        $login_data = $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);
        if (Auth::guard('admin')->attempt($login_data)) {

            notify()->success('Account Login Succesful..⚡️');

            return redirect('/admin_home');

        } else {

            notify()->error('Enter Curect Data ⚡️');
            return redirect()->back();
        }

    }

    public function admin_logout()
    {
        Auth::guard('admin')->logout();

        notify()->success('Account Log Out Succesful ⚡️');
        return redirect('/admin_login');
    }
    public function admin_check()
    {
        return view('adminpanel.admin_home');
    }
    public function admin_customer_accounts_view()
    {
        return view('adminpanel.admin_customer_accounts_view');

    }
}
