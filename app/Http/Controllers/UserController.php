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
use App\Models\Wishlist;
use App\Models\OrderItem;
use Illuminate\Support\Str;
use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\Otp;
use App\Models\Review;
use Cloudinary\Cloudinary;
use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    // cloudinary start
    public $cloudinary;
    public function __construct()
    {
        $this->cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key'    => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);
    }
    // cloudinary end



    public function signin_submit(Request $request)
    {
        $signin_data = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|confirmed',

        ]);

        if ($signin_data) {

            $signin_data['password'] = Hash::make($signin_data['password']);

            $user = User::create($signin_data);

            // Generate OTP
            $otp = rand(100000, 999999);

            // Store OTP in database
            Otp::create([
                'user_id' => $user->id,
                'otp_code' => $otp,
                'expires_at' => Carbon::now()->addMinutes(1),
            ]);

            // Send OTP via Email
            Mail::raw("Your verification OTP is: $otp (valid for 1 minutes)", function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Email Verification OTP');
            });

            // $user->notify(new UserMail());
            // $user_id = $user->id;

            session(['user_id' => $user->id]);

            flash()->addSuccess('OTP succesfuly send your email ⚡️');
            return view('userpanel.otp_verification_form');
            // flash()->addSuccess('Account created succesfuly ⚡️');

            // return redirect('/login');
        } else {
            flash()->addError('Account Created Faild ⚡️');

            return redirect()->back();
        }
    }

    // public function otp_verification_form()
    // {
    //     if (session('user_id')) {
    //         return view('userpanel.otp_verification_form');
    //     }
    //     else{
    //         return redirect('/login');
    //     }
    // }

    public function otp_verification_form_submit(Request $request)
    {
        // return $request;
        $request->validate(['otp' => 'required|numeric']);

        // $userid = $request->user_id;
        $userid = session('user_id');

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
            return redirect('/otp_verification_form_resubmit');
        }
    }

    public function otp_verification_form_resubmit()
    {
        if (!session('user_id')) {
            return redirect('/login');
        }

        $userid = session('user_id');
        $user = User::find($userid);


        // Generate OTP
        $otp = rand(100000, 999999);

        // Store OTP in database
        Otp::create([
            'user_id' => $userid,
            'otp_code' => $otp,
            'expires_at' => Carbon::now()->addMinutes(1),
        ]);

        // Send OTP via Email
        Mail::raw("Your verification OTP is: $otp (valid for 1 minutes)", function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Email Verification OTP');
        });

        flash()->addSuccess('OTP succesfuly send your email ⚡️');
        // return redirect('/otp_verification_form');
        return view('userpanel.otp_verification_form');
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
                    'expires_at' => Carbon::now()->addMinutes(1),
                ]);

                // Send OTP via Email
                Mail::raw("Your verification OTP is: $otp (valid for 1 minutes)", function ($message) use ($user) {
                    $message->to($user->email)
                        ->subject('Email Verification OTP');
                });

                // $user->notify(new UserMail());
                $user_id = $user->id;

                flash()->addError('Ples verifide your email ⚡️');
                flash()->addSuccess('OTP succesfuly send your email ⚡️');
                return view('userpanel.otp_verification_form');
                // flash()->addSuccess('Account created succesfuly ⚡️');

                // return redirect('/login');
            } else {
                if (Auth::attempt($login_data,  $request->remember)) {

                    // $request->remember

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
        $user = auth()->user();
        // if (Auth::check()) {}
        $products_data = Product::with('category')
            ->inRandomOrder()
            ->get();

        return view('userpanel.home', compact('products_data'));
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
            $user = Auth::user();
            $oldUrl = $user->photo_url;
            $oldpublicId = $user->photo_public_id;
            $fullPublicId = 'Watch_Shop/User_DP/' . $oldpublicId;


            if (!empty($oldUrl)) {

                $this->cloudinary->uploadApi()->destroy($fullPublicId, [
                    'resource_type' => 'image',
                ]);
            }

            $file = $request->file('photo');
            $publicId = 'uploads/' . date('Y/m') . '/' . Str::random(8);

            // upload and get response
            $result = $this->cloudinary->uploadApi()->upload(
                $file->getRealPath(),
                [
                    'public_id' => $publicId,
                    'folder' => 'Watch_Shop/User_DP', // optional
                    'overwrite' => false,
                    'resource_type' => 'image',
                ]
            );

            // secure URL
            $url = $result['secure_url'] ?? ($result['url'] ?? null);

            $user = DB::table('users')->where('id', $user->id)->update([
                'photo_url' => $url,
                'photo_public_id' => $publicId,

            ]);

            flash()->addSuccess('Photo Update Succesful..⚡️');
            return redirect()->back();
        } else {

            $user = Auth::user();
            $oldUrl = $user->photo_url;
            $oldpublicId = $user->photo_public_id;
            $fullPublicId = 'Watch_Shop/User_DP/' . $oldpublicId;


            if (!empty($oldUrl)) {

                $this->cloudinary->uploadApi()->destroy($fullPublicId, [
                    'resource_type' => 'image',
                ]);
            }

            $user = DB::table('users')->where('id', $user->id)->update([
                'photo_url' => null,
                'photo_public_id' => null,
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

        // Fetch reviews for this product with user info
        $reviews = Review::with('user')->where('product_id', $product_id)->orderBy('created_at', 'desc')->get();

        // Check if user is authenticated for conditional features
        $isAuthenticated = Auth::check();
        $user = $isAuthenticated ? Auth::user() : null;

        $user = auth()->user();
        $isInWishlist = false;
        $canReview = false;
        if ($user) {
            // Assuming 'wishlist' is a belongsToMany relationship in User model
            $isInWishlist = $user->wishlist()->where('product_id', $product_id)->exists();

            // Check if user can review: has delivered order with this product and no existing review
            $hasDeliveredOrder = Order::where('user_id', $user->id)
                ->where('status', 'delivered')
                ->whereHas('items', function ($query) use ($product_id) {
                    $query->where('product_id', $product_id);
                })
                ->exists();

            $hasExistingReview = Review::where('user_id', $user->id)
                ->where('product_id', $product_id)
                ->exists();

            $canReview = $hasDeliveredOrder && !$hasExistingReview;
        }


        return view('userpanel.single_product_view', compact('product_details', 'related_products', 'all_products', 'user', 'isInWishlist', 'canReview', 'reviews'));
    }
    // Add to wishlist
    public function add_wishlist($product_id)
    {
        $user = Auth::user();

        if (!$user->wishlist()->where('product_id', $product_id)->exists()) {
            $user->wishlist()->attach($product_id);
        }

        flash()->addSuccess('Product add to wishlist!..⚡️');
        return  redirect()->back();
    }
    // Remove from wishlist
    public function remove_wishlist($product_id)
    {
        $user = Auth::user();
        $user->wishlist()->detach($product_id);

        flash()->addSuccess('Product removed to wishlist!..⚡️');
        return redirect()->back();
    }

    // Show wishlist
    public function wishlist_products_view()
    {
        $wishlist = Auth::user()->wishlist()->with('category')->get();

        return view('userpanel.wishlist_products_view', compact('wishlist'));
    }

    public function by_now($product_id)
    {
        $user_id = Auth::id(); // current logged-in user

        // Check if product exists
        $product = Product::find($product_id);
        if (!$product) {
            flash()->addError('Product not found!');
            return redirect()->back();
        }

        // Check if product stock is available
        if ($product->stock < 1) {
            flash()->addError('Sorry, this product is out of stock!');
            return redirect()->back();
        }

        // Check if product already exists in cart
        $cart = Cart::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

        if ($cart) {
            // Product already added once → redirect to cart page
            flash()->addInfo('This product is already in your cart.');
            return redirect('add_to_cart_view');  // change route name if needed
        }

        // Add product once only to cart
        Cart::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'quantity' => 1,
        ]);

        flash()->addSuccess('Product added to cart!..⚡️');
        return redirect('add_to_cart_view');

        // return redirect()->back()->with('success', 'Product added to cart!');
    }


    public function add_to_cart($product_id)
    {
        $user_id = Auth::id(); // current logged-in user

        // Check if product exists
        $product = Product::find($product_id);
        if (!$product) {
            flash()->addError('Product not found!');
            return redirect()->back();
        }

        // Check if product stock is available
        if ($product->stock < 1) {
            flash()->addError('Sorry, this product is out of stock!');
            return redirect()->back();
        }

        // Check if product already exists in cart
        $cart = Cart::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

        if ($cart) {
            // Product already added once → redirect to cart page
            flash()->addInfo('This product is already in your cart.');
            return redirect()->back();  // change route name if needed
        }

        // Add product once only to cart
        Cart::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'quantity' => 1,
        ]);

        flash()->addSuccess('Product added to cart!..⚡️');
        return redirect()->back();
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

    // public function all_products_view_page_filter(Request $request)
    // {
    //      $query = Product::query();

    // if ($request->has('min') && is_numeric($request->min)) {
    //     $query->where('price', '>=', $request->min);
    // }

    // if ($request->has('max') && is_numeric($request->max)) {
    //     $query->where('price', '<=', $request->max);
    // }

    // if ($request->filled('rating') && $request->rating > 0) {
    //     $query->where('rating', '>=', $request->rating);
    // }

    // if ($request->filled('upload') && $request->upload > 0) {
    //     $query->where('created_at', '>=', now()->subDays($request->upload));
    // }

    // if ($request->filled('sort')) {
    //     switch ($request->sort) {
    //         case 'price-asc': $query->orderBy('price', 'asc'); break;
    //         case 'price-desc': $query->orderBy('price', 'desc'); break;
    //         case 'name-asc': $query->orderBy('name', 'asc'); break;
    //         case 'name-desc': $query->orderBy('name', 'desc'); break;
    //         case 'newest': $query->orderBy('created_at', 'desc'); break;
    //         case 'oldest': $query->orderBy('created_at', 'asc'); break;
    //         default: $query->orderBy('id','desc');
    //     }
    // }

    // $products = $query->paginate(12);

    //     return view('userpanel.all_products_view_page_filter', compact('products'));
    // }




    public function all_products_view_page_filter(Request $request)
    {
        $user = auth()->user();
        $query = Product::query();

        // Price Filter
        if ($request->has('min') && is_numeric($request->min)) {
            $query->where('price', '>=', $request->min);
        }
        if ($request->has('max') && is_numeric($request->max)) {
            $query->where('price', '<=', $request->max);
        }

        // Rating Filter
        if ($request->filled('rating') && $request->rating > 0) {
            $query->where('rating', '>=', $request->rating);
        }

        // Upload Time Filter
        if ($request->filled('upload') && $request->upload > 0) {
            $query->where('created_at', '>=', now()->subDays($request->upload));
        }

        // Category Filter
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        // Sorting
        if ($request->filled('sort')) {
            switch ($request->sort) {
                case 'price-asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price-desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'name-asc':
                    $query->orderBy('name', 'asc');
                    break;
                case 'name-desc':
                    $query->orderBy('name', 'desc');
                    break;
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('created_at', 'asc');
                    break;
                default:
                    $query->orderBy('id', 'desc');
            }
        }

        $products = $query->paginate(12);

        // Get all categories for the sidebar
        $categories = Categorie::all();
        $wishlist = $user->wishlist()->pluck('product_id');

        return view('userpanel.all_products_view_page_filter', compact('products', 'categories', 'wishlist'));
    }

    public function search_products(Request $request)
    {
        $user = auth()->user();
        $query = $request->get('q', '');
        if (!$query) {
            return redirect()->back();
        }
        $products = collect();
        $categories = Categorie::all();

        if (!empty($query)) {
            $products = Product::with('category')
                ->where(function ($q) use ($query) {
                    $q->where('name', 'LIKE', "%{$query}%")
                        ->orWhere('description', 'LIKE', "%{$query}%")
                        ->orWhere('sku', 'LIKE', "%{$query}%");
                })
                ->orWhereHas('category', function ($q) use ($query) {
                    $q->where('name', 'LIKE', "%{$query}%");
                })
                ->paginate(12);
        }


        $wishlist = $user->wishlist()->pluck('product_id');

        return view('userpanel.all_products_view_page_filter', compact('products', 'query', 'categories', 'wishlist'));
    }

    public function search_suggestions(Request $request)
    {
        $query = $request->get('q', '');


        $suggestions = [];

        if (strlen($query) >= 2) {
            // Optimized query - only select needed fields
            $products = Product::select('id', 'name', 'price', 'photo_url', 'category_id')
                ->with(['category:id,name'])
                ->where(function ($q) use ($query) {
                    $q->where('name', 'LIKE', "%{$query}%")
                        ->orWhere('sku', 'LIKE', "%{$query}%");
                })
                ->limit(4) // Reduced from 5 to 4 for faster response
                ->get();

            // Get category suggestions - simplified query
            $categories = Categorie::select('id', 'name')
                ->where('name', 'LIKE', "%{$query}%")
                ->limit(2) // Reduced from 3 to 2
                ->get();

            // Format suggestions
            foreach ($products as $product) {
                $suggestions[] = [
                    'type' => 'product',
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'photo_url' => $product->photo_url,
                    'category' => $product->category->name,
                    'url' => '/single_product_view/' . $product->id
                ];
            }

            foreach ($categories as $category) {
                $suggestions[] = [
                    'type' => 'category',
                    'id' => $category->id,
                    'name' => $category->name,
                    'url' => '/search?q=' . urlencode($category->name)
                ];
            }
        }

        return response()->json($suggestions);
    }

    public function submit_review(Request $request, $product_id)
    {
        $user = Auth::user();

        // Validate request
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:1000',
        ]);

        // Check eligibility again
        $hasDeliveredOrder = Order::where('user_id', $user->id)
            ->where('status', 'delivered')
            ->whereHas('items', function ($query) use ($product_id) {
                $query->where('product_id', $product_id);
            })
            ->exists();

        $hasExistingReview = Review::where('user_id', $user->id)
            ->where('product_id', $product_id)
            ->exists();

        if (!$hasDeliveredOrder || $hasExistingReview) {
            flash()->addError('You are not eligible to review this product.');
            return redirect()->back();
        }

        // Create review
        Review::create([
            'user_id' => $user->id,
            'product_id' => $product_id,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        flash()->addSuccess('Review submitted successfully!');
        return redirect()->back();
    }
}
