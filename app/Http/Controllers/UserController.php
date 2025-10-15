<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
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
use App\Models\Categorie;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Str;
use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\Otp;

use function PHPUnit\Framework\isEmpty;

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

            // Generate OTP
            $otp = rand(100000, 999999);

            // Store OTP in database
            Otp::create([
                'user_id' => $user->id,
                'otp_code' => $otp,
                'expires_at' => Carbon::now()->addMinutes(5),
            ]);

            // Send OTP via Email
            Mail::raw("Your verification OTP is: $otp (valid for 5 minutes)", function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Email Verification OTP');
            });

            // $user->notify(new UserMail());
            $user_id = $user->id;
            flash()->addSuccess('OTP succesfuly send your email ⚡️');
            return view('userpanel.otp_verification_form', compact('user_id'));
            // flash()->addSuccess('Account created succesfuly ⚡️');

            // return redirect('/login');
        } else {
            flash()->addError('Account Created Faild ⚡️');

            return redirect()->back();
        }
    }

    public function otp_verification_form()
    {
        return view('userpanel.otp_verification_form');
    }

    public function otp_verification_form_submit(Request $request)
    {
        // return $request;
        $request->validate(['otp' => 'required|numeric']);

        $userid = $request->user_id;

        $otpRecord = Otp::where('user_id', $userid)
            ->where('otp_code', $request->otp)
            ->where('expires_at', '>', Carbon::now())
            ->first();

        if ($otpRecord) {
            $otpRecord->delete();

            //  $user = User::find($userid);
            //  $user->delete();

            $user = User::find($userid);
            $user->update(['is_verified' => true]);

            flash()->addSuccess('OTP succesfuly verified ⚡️');
            return redirect('/login');
        } else {
            flash()->addError('Enter curect OTP ⚡️');
            return redirect()->back();
        }
    }

    public function login_submit(Request $request)
    {

        $login_data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if user exists
        $user = User::where('email', $login_data['email'])->first();

        if ($user) {
            // Check if user is verified
            if (!$user->is_verified) {
                // return redirect('/signin');

                // Generate OTP
                $otp = rand(100000, 999999);

                // Store OTP in database
                Otp::create([
                    'user_id' => $user->id,
                    'otp_code' => $otp,
                    'expires_at' => Carbon::now()->addMinutes(5),
                ]);

                // Send OTP via Email
                Mail::raw("Your verification OTP is: $otp (valid for 5 minutes)", function ($message) use ($user) {
                    $message->to($user->email)
                        ->subject('Email Verification OTP');
                });

                // $user->notify(new UserMail());
                $user_id = $user->id;
                
                flash()->addError('Ples verifide your email ⚡️');
                flash()->addSuccess('OTP succesfuly send your email ⚡️');
                return view('userpanel.otp_verification_form', compact('user_id'));
                // flash()->addSuccess('Account created succesfuly ⚡️');

                // return redirect('/login');
            } else {
                if (Auth::attempt($login_data, $request->remember)) {

                    flash()->addSuccess('Welcome to Watch Shop..⚡️');
                    return redirect('/home');
                } else {

                    // notify()->error('Enter curect data ⚡️');
                    flash()->addError('Enter curect data ⚡️');
                    return redirect()->back();
                }
            }
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

        // deafault address
        $default_address = Auth::user()->defaultAddress;

        return view('userpanel.account', compact('user_data', 'default_address'));
    }

    public function account_upadate(Request $request)
    {
        $account_data = $request->validate([
            'name' => 'required|string|max:50',
            'phone' => 'nullable|integer|min:15',
            'dob' => 'nullable|date',
            'username' => 'required|string|max:50',
            'bio' => 'nullable|string|max:100',
        ]);

        $user = Auth::user();
        // return $user->id;
        $user = DB::table('users')->where('id', $user->id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'username' => $request->username,
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

    public function address_view_page()
    {
        // $user = Auth::user();
        $user = Auth::user();
        $addresses = $user->addresses;  // returns a collection of Address models

        // return $addresses;

        return view('userpanel.address_view_page', compact('addresses'));
    }


    public function add_address_form_submit(Request $request)
    {
        $validated = $request->validate([
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


        $user = Auth::user();



        if ($request->is_default) {
            // Case 1: User manually set this as default
            Address::where('user_id', $user->id)->update(['is_default' => false]);
            // $validated['is_default'] = true;

            Address::create([
                'user_id' => $user->id,
                ...$validated
            ]);

            flash()->addSuccess('Address added successfully ⚡️');

            return  redirect('/address_view_page');


            // return redirect()->back();
        } else {
            // Case 2: User did NOT check default
            $hasDefault = Address::where('user_id', $user->id)
                ->where('is_default', true)
                ->exists();

            if (! $hasDefault) {
                // No default exists → make this one default automatically
                Address::create([
                    'user_id' => $user->id,
                    'is_default' => true,
                    ...$validated
                ]);

                flash()->addSuccess('Address added successfully ⚡️');

                return redirect('/address_view_page');
            } else {
                // Keep it non-default
                Address::create([
                    'user_id' => $user->id,
                    ...$validated
                ]);

                flash()->addSuccess('Address added successfully ⚡️');

                return redirect('/address_view_page');
            }
        }
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

    public function addresses_delete($product_id)
    {

        $user = Auth::user();

        // Find address
        $address = Address::where('user_id', $user->id)->findOrFail($product_id);

        $wasDefault = $address->is_default;

        // Delete the address
        $address->delete();
        // return redirect()->back();


        // If deleted address was default → set another as default
        if ($wasDefault) {
            $newDefault = Address::where('user_id', $user->id)->first();
            if ($newDefault) {
                $newDefault->is_default = true;
                $newDefault->save();

                flash()->addSuccess('Address deleted Succesfuly!..⚡️');
                return redirect()->back();
            } else {

                flash()->addSuccess('Address deleted Succesfuly!..⚡️');
                return redirect()->back();
            }
        } else {
            return redirect('/address_view_page');
        }
    }

    public function single_product_view($product_id)
    {
        $product_details = Product::findOrFail($product_id);

        $related_products = Product::where('category_id', $product_details->category_id)->get();
        $all_products = Product::with('category')
            ->inRandomOrder()
            ->get();

        return view('userpanel.single_product_view', compact('product_details', 'related_products', 'all_products'));
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
    public function order_checkout($address_id = '')
    {
        $user_id = Auth::id();

        // Get cart with related product
        $cart_product = Cart::with('product')
            ->where('user_id', $user_id)
            ->get();

        if ($cart_product->isEmpty()) {

            return view('userpanel.add_to_cart_view', compact('cart_product'));
        } else {
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



            // Check if address present or not
            $hasAddress = Address::where('user_id', $user_id)->exists();
            if ($hasAddress) {
                if ($address_id) {
                    $address = Address::find($address_id);
                } else {
                    // deafault address
                    $address = Auth::user()->defaultAddress;
                }
            } else {
                $address = '';
            }




            // Pass all values to view
            return view('userpanel.order_checkout', compact('cart_product', 'subtotal', 'shipping', 'total', 'address'));
        }
    }

    public function order_address_view_page()
    {
        // $user = Auth::user();
        $user = Auth::user();
        $addresses = $user->addresses;  // returns a collection of Address models

        // return $addresses;

        return view('userpanel.order_address_view_page', compact('addresses'));
        //    return view('userpanel.order_address_view_page');
    }
    public function order_add_address_form_submit(Request $request)
    {
        $validated = $request->validate([
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


        $user = Auth::user();



        if ($request->is_default) {
            // Case 1: User manually set this as default
            Address::where('user_id', $user->id)->update(['is_default' => false]);
            // $validated['is_default'] = true;

            Address::create([
                'user_id' => $user->id,
                ...$validated
            ]);

            flash()->addSuccess('Address added successfully ⚡️');

            return  redirect('/order_address_view_page');


            // return redirect()->back();
        } else {
            // Case 2: User did NOT check default
            $hasDefault = Address::where('user_id', $user->id)
                ->where('is_default', true)
                ->exists();

            if (! $hasDefault) {
                // No default exists → make this one default automatically
                Address::create([
                    'user_id' => $user->id,
                    'is_default' => true,
                    ...$validated
                ]);

                flash()->addSuccess('Address added successfully ⚡️');

                return redirect('/order_address_view_page');
            } else {
                // Keep it non-default
                Address::create([
                    'user_id' => $user->id,
                    ...$validated
                ]);

                flash()->addSuccess('Address added successfully ⚡️');

                return redirect('/order_address_view_page');
            }
        }
    }
    public function order_address_delete($product_id)
    {

        $user = Auth::user();

        // Find address
        $address = Address::where('user_id', $user->id)->findOrFail($product_id);

        $wasDefault = $address->is_default;

        // Delete the address
        $address->delete();
        // return redirect()->back();


        // If deleted address was default → set another as default
        if ($wasDefault) {
            $newDefault = Address::where('user_id', $user->id)->first();
            if ($newDefault) {
                $newDefault->is_default = true;
                $newDefault->save();

                flash()->addSuccess('Address deleted Succesfuly!..⚡️');
                return redirect('/order_address_view_page');
            } else {

                flash()->addSuccess('Address deleted Succesfuly!..⚡️');
                return redirect('/order_address_view_page');
            }
        } else {
            // return redirect()->back();

        }
    }

    public function confirm_order($address_id = '')
    {

        $user_id = Auth::id();
        // Get default address
        // $default_address = Auth::user()->defaultAddress;

        $address = Address::find($address_id);

        // return $address;

        if ($address == '') {
            flash()->addError('Ples add your Address ⚡️');
            return redirect('/order_add_address_form');
        } else {
            // return "dun";
            // Get cart with related product
            $cart_product = Cart::with('product')->where('user_id', $user_id)->get();

            if ($cart_product->isEmpty()) {
                return redirect()->back()->with('error', 'Cart is empty!');
            }

            // Calculate subtotal and totals
            $subtotal = $cart_product->sum(fn($item) => $item->product->price * $item->quantity);
            $shipping = 40;
            $total = $subtotal + $shipping;

            // Create order
            $order = Order::create([
                'user_id' => $user_id,
                'address_id' => $address_id,   // ✅ save address_id
                'order_number' => 'ORD-' . strtoupper(uniqid()),
                'subtotal' => $subtotal,
                'shipping_cost' => $shipping,
                'total' => $total,
                'status' => 'pending',
                'payment_method' => $request->payment_method ?? 'COD',
            ]);

            // Create order items
            foreach ($cart_product as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'price' => $item->product->price,
                ]);
            }

            // Delete cart after order
            Cart::where('user_id', $user_id)->delete();

            // Load order with relationships
            $order->load('items.product', 'user');

            // 3. send email
            // Mail::to($order->user->email)
            //     ->send(new OrderConfirmation($order));

            //   Mail::to($order->user->email)->queue(new OrderConfirmation($order));
            Mail::to($order->user->email)->queue(new OrderConfirmation($order->load('items.product')));

            // Pass address to view
            return view('userpanel.confirm_order_view', [
                'order' => $order->load('items.product', 'user'),
                'default_address' => $address,
            ]);
        }

        // return $address_id;


    }

    public function all_orders_view()
    {
        $orders = Auth::user()->orders()
            ->with('items.product') // eager load products for each order
            ->orderBy('created_at', 'desc')
            ->paginate(4); // for pagination

        return view('userpanel.all_orders_view', compact('orders'));
    }

    public function order_single_product_details($order_id)
    {
        // Get default address
        $default_address = Auth::user()->defaultAddress;
        // Get the order with its items and related product
        $order = Order::with('items.product')
            ->where('id', $order_id)
            ->firstOrFail();

        return view('userpanel.order_single_product_details', compact('order', 'default_address'));
        // return view('userpanel.order_single_product_details');

    }

    // public function cancel_order(Order $order)
    // {
    //     // return "dun";
    //     if ($order->user_id === auth()->id() && in_array($order->status, ['confirmed', 'shipped'])) {
    //         $order->status = 'cancelled';
    //         $order->save();

    //         return "dun";
    //     }
    //     // return "dun";

    // }


}
