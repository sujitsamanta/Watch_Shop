<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Notifications\UserMail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Product;




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

            $user = User::create($signin_data);

            $user->notify(new UserMail());
            flash()->addSuccess('Account created succesfuly ⚡️');

            return redirect('/login');
        } else {
            flash()->addError('Account Created Faild ⚡️');

            return redirect()->back();
        }
    }
    public function login_submit(Request $request)
    {

        $login_data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);


        if (Auth::attempt($login_data)) {

            flash()->addSuccess('Welcome to Watch Shop..⚡️');

            return redirect('/home');
        } else {

            // notify()->error('Enter curect data ⚡️');
            flash()->addError('Enter curect data ⚡️');


            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();

        flash()->addSuccess('Sign Out Succesfuly..⚡️');

        return redirect('/home');
    }

    public function home_check()
    {
        if (Auth::check()) {
            $products_data = Product::with('category')
                ->inRandomOrder()
                ->get();


            return view('userpanel.home', compact('products_data'));
        } else {

            $products_data = Product::with('category')
                ->inRandomOrder()
                ->get();

            return view('userpanel.home-x', compact('products_data'));
        }
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

        flash()->addSuccess('Account Update Succesfuly..⚡️');

        return redirect()->back();
    }

    public function account_photo_update(Request $request)
    {

        if ($request->photo) {
            // $path = $request->file('photo')->store('user/user_account_images', 'public');

            $path = $request->file('photo')->store('photos', 'public');
            $patharrey = explode('/', $path);
            $img_name = $patharrey[1];

            $user = Auth::user();

            if ($user->photo) {
                $oldPath = public_path('storage/photos/' . $user->photo);

                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $user = DB::table('users')->where('id', $user->id)->update([
                'photo' => $img_name,

            ]);

            flash()->addSuccess('Photo Update Succesful..⚡️');
            return redirect()->back();
        } else {
            $user = Auth::user();

            if ($user->photo) {
                $oldPath = public_path('storage/photos/' . $user->photo);

                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }


            $user = DB::table('users')->where('id', $user->id)->update([
                'photo' => null,

            ]);

            flash()->addSuccess('Photo Update Succesful..⚡️');

            return redirect()->back();
        }
    }
    public function single_product_view(){
        return view('userpanel.single_product_view');
    }



}
