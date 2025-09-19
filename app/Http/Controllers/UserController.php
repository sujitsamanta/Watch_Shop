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
use App\Models\Cart;
use App\Models\Address;




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


        if (Auth::attempt($login_data, $request->remember)) {

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


    public function address_view_page()
    {
        // $user = Auth::user();
        $user = Auth::user();
        $addresses = $user->addresses;  // returns a collection of Address models


        // return $addresses;

        return view('userpanel.address_view_page', compact('addresses'));
    }

    public function add_address_form()
    {
        return view('userpanel.add_address_form');
    }

    public function add_address_form_submit(Request $request)
    {
        $address = $request->validate([
            'address_type' => 'required|in:home,office,other',
            'full_name' => 'required|string',
            'phone_number' => 'required|string',
            'street_address' => 'required|string',
            'apartment_unit' => 'nullable|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
            'pin_number' => 'required|string',
            'country' => 'required|string',
            'is_default'     => 'nullable|boolean',
        ]);

        // 'is_default' => 'nullable|boolean',

        $user = Auth::user();

        // Reset old defaults
        Address::where('user_id', $user->id)->update(['is_default' => false]);

        // The ... "unpacks" that array into individual key–value pairs
        $result = Address::create([
            'user_id' => $user->id,
            ...$address
        ]);

        flash()->addSuccess('Address Add Succesfuly..⚡️');
        return redirect()->back();;
    }
    public function addresses_set_default($address_id)
    {
        $user = Auth::user();

        // Reset old defaults
        Address::where('user_id', $user->id)->update(['is_default' => false]);

        // Set new default
        $address = Address::where('user_id', $user->id)->findOrFail($address_id);
        $address->is_default = true;
        $address->save();

        flash()->addSuccess('Address Default Succesfuly dun..⚡️');
        return redirect()->back();
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
    public function single_product_view($product_id)
    {

        $product_details = Product::findOrFail($product_id);
        return view('userpanel.single_product_view', compact('product_details'));
        // return $request->id;
    }
    public function add_to_cart($product_id)
    {
        $user_id = Auth::id(); // current logged-in user

        // check if product already in cart
        $cart = Cart::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

        $product = Product::find($product_id);

        if ($cart && $product) {
            if ($cart) {

                if ($cart->quantity < $product->stock) {
                    // update quantity
                    $cart->quantity += 1;
                    $cart->save();
                    flash()->addSuccess('Product quantity increased!..⚡️');
                    return redirect()->back();
                } else {
                    flash()->addError('Sorry, only ' . $product->stock . ' items available in stock!');
                    return redirect()->back();
                }
            } else {
                // create new cart entry
                Cart::create([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'quantity' => 1,
                ]);

                flash()->addSuccess('Product added to cart!..⚡️');
                return redirect()->back();
            }
        }


        // return redirect()->back()->with('success', 'Product added to cart!');
    }
    public function add_to_cart_view()
    {
        $user_id = Auth::id();

        // Get cart with related product
        $cart_product = Cart::with('product')
            ->where('user_id', $user_id)
            ->get();

        // Calculate subtotal (sum of all products × their quantities)
        $subtotal = $cart_product->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        // Shipping cost (you can set logic here)
        $shipping = 40;

        // Final total
        $total = $subtotal + $shipping;

        // Pass all values to view
        return view('userpanel.add_to_cart_view', compact('cart_product', 'subtotal', 'shipping', 'total'));
    }
    public function add_to_cart_increash_product_quantity(Request $request)
    {
        // return $request;
        $user_id = Auth::id(); // current logged-in user

        // check if product already in cart
        $cart = Cart::where('user_id', $user_id)
            ->where('product_id', $request->product_id)
            ->first();

        // Get product stock from products table
        $product = Product::find($request->product_id);

        if ($cart && $product) {
            if ($cart->quantity < $product->stock) {
                // Only increase if stock is available
                $cart->quantity += 1;
                $cart->save();

                flash()->addSuccess('Product quantity increased!..⚡️');
            } else {
                flash()->addError('Sorry, only ' . $product->stock . ' items available in stock!');
            }
        } else {
            flash()->addError('Product not found in cart!');
        }
        // return redirect()->back()->with('success', 'Product added to cart!');
        return redirect()->back();
    }
    public function add_to_cart_decrease_product_quantity(Request $request)
    {
        // return $request;
        $user_id = Auth::id(); // current logged-in user

        // check if product already in cart
        $cart = Cart::where('user_id', $user_id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($cart) {
            // update quantity
            $cart->quantity -= 1;
            $cart->save();

            if ($cart->quantity == 0) {
                Cart::where('user_id', $user_id)->where('product_id', $request->product_id)->delete();
                flash()->addSuccess('Product deleted!..⚡️');
                return redirect()->back();
            } else {
                flash()->addSuccess('Product quantity decrease!..⚡️');
                // return redirect()->back()->with('success', 'Product added to cart!');
                return redirect()->back();
            }
        }
        // return redirect('/add_to_cart_view');
    }
    public function add_to_cart_delete_product(Request $request)
    {
        $user_id = Auth::id();
        Cart::where('user_id', $user_id)->where('product_id', $request->product_id)->delete();
        flash()->addSuccess('Product deleted!..⚡️');
        return redirect()->back();

        // return $product_id;
    }
    public function add_to_cart_clear_all_product()
    {
        $user_id = Auth::id();

        $hasProducts = Cart::where('user_id', $user_id)->exists();

        if ($hasProducts) {
            Cart::where('user_id', $user_id)->delete();
            flash()->addSuccess('All product deleted!..⚡️');
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
    public function order_checkout(Request $request)
    {

        $user_id = Auth::id();

        // Get cart with related product
        $cart_product = Cart::with('product')
            ->where('user_id', $user_id)
            ->get();

        // Calculate subtotal (sum of all products × their quantities)
        $subtotal = $cart_product->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        // Shipping cost (you can set logic here)
        $shipping = 40;

        // Final total
        $total = $subtotal + $shipping;

        // deafault address
        $default_address = Auth::user()->defaultAddress;


        // Pass all values to view
        return view('userpanel.order_checkout', compact('cart_product', 'subtotal', 'shipping', 'total', 'default_address'));
        // return view('userpanel.order_checkout');
        // return 

    }
}
