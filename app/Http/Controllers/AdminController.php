<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\Order;


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

            // notify()->success('Account Login Succesful..⚡️');
            flash()->addSuccess('Account Login Succesful..⚡️');


            return redirect('/admin_home');
        } else {

            // notify()->error('Enter Curect Data ⚡️');
            flash()->addError('Enter Curect Data ⚡️');

            return redirect()->back();
        }
    }

    public function admin_logout()
    {
        Auth::guard('admin')->logout();

        // notify()->success('Account Log Out Succesful ⚡️');
        flash()->addSuccess('Account Log Out Succesful ⚡️');

        return redirect('/admin_login');
    }
    public function admin_check()
    {
        return view('adminpanel.admin_home');
    }
    public function admin_customer_accounts_view()
    {
        //  $users_data = User::simplePaginate(7);

        $users_data = User::paginate(7);

        return view('adminpanel.admin_customer_accounts_view', compact('users_data'));
    }

    public function admin_user_account_delete($user_id)
    {
        $user = User::findOrFail($user_id);

        // Delete the user (related addresses/orders will also be deleted if you set `onDelete('cascade')` in migrations)
        $user->delete();

        flash()->addSuccess('User account deleted Succesful ⚡️');
        return redirect()->back();
    }
    public function admin_setting()
    {
        return view('adminpanel.admin_setting');
    }

    public function admin_add_categorie()
    {

        return view('adminpanel.admin_add_categorie');
    }

    public function admin_add_categorie_submit(Request $request)
    {
        // return $request;

        $add_categorie_data = $request->validate([
            'name' => 'required|unique:categories,name',
            'slug' => 'required|unique:categories,slug',
            'description' => 'nullable',

        ]);

        $result = Categorie::create($add_categorie_data);

        if ($result) {
            flash()->addSuccess('Categorie Add Succesful ⚡️');
            return redirect()->back();
        } else {
            flash()->addError('Categorie Not Add ⚡️');
            return redirect()->back();
        }
    }

    public function admin_add_product(Request $request)
    {

        $categories_data = Categorie::all();
        return view('adminpanel.admin_add_product', compact('categories_data'));
    }

    public function admin_add_product_submit(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'sku' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
            'image' => 'required|max:10240', // 10MB
        ]);

        $path = $request->file('image')->store('products_images', 'public');
        $patharrey = explode('/', $path);
        $img_name = $patharrey[1];
        $result = Product::create([
            'category_id' => $request->category_id,
            'name'        => $request->name,
            'slug'        => $request->slug,
            'sku'         => $request->sku,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'description' => $request->description,
            'image'       => $img_name,
        ]);

        if ($result) {
            flash()->addSuccess('Product Add Succesful ⚡️');
            return redirect()->back();
        } else {
            flash()->addError('Product Not Add ⚡️');
            return redirect()->back();
        }
    }
    public function admin_products_view()
    {
        $products_data = Product::with('category')->paginate(7);

        return view('adminpanel.admin_products_view', compact('products_data'));
    }

    public function admin_product_delete($product_id)
    {

        $product = Product::find($product_id); // Find product by id
        if ($product) {
            $product->delete(); // Delete product
            flash()->addSuccess('Product Deleted Succesful ⚡️');
            return redirect()->back();
        }
    }
    public function admin_update_product($product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('adminpanel.admin_update_product', compact('product'));
    }

    public function admin_update_product_submit(Request $request, $product_id)
    {
        $product = Product::findOrFail($product_id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $product_id,
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
            'image' => 'nullable|max:10240', // 10MB, nullable for updates
        ]);

        $updateData = [
            'name' => $request->name,
            'slug' => $request->slug,
            'sku' => $request->sku,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ];

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products_images', 'public');
            $pathArray = explode('/', $path);
            $img_name = $pathArray[1];
            $updateData['image'] = $img_name;
        }

        $result = $product->update($updateData);

        if ($result) {
            flash()->addSuccess('Product Updated Successfully ⚡️');
            return redirect('/admin_products_view');
        } else {
            flash()->addError('Product Update Failed ⚡️');
            return redirect()->back();
        }
    }

    public function admin_all_orders()
    {
        // return view('adminpanel.amin_all_orders');
        $orders = Order::with(['user', 'items.product']) // Eager load relations
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('adminpanel.admin_all_orders', compact('orders'));
        // return "dun";
    }


    public function admin_accept_order(Request $request)
    {
        $order_id=$request->order_id;
        $order = Order::findOrFail($order_id);
        // return print_r($order);
        // Only allow accepting pending orders
        if ($order->status === 'pending') {
            $order->status = 'confirmed';
            $order->save();

            flash()->addSuccess('Order accepted successfully ⚡️');
            return redirect()->back();
        }
        flash()->addError('This order cannot be accepted ⚡️');
        return redirect()->back();
    }
}
