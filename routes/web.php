<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

use App\Http\Middleware\UserMiddleware;

// User Panel Start

// Route::view('/home-x', 'userpanel.home-x');
Route::get('/home', [UserController::class,'home_check']);


// single_product_view
Route::get('/single_product_view/{product_id}', [UserController::class,'single_product_view']);

// add to cart
Route::get('/add_to_cart/{product_id}', [UserController::class,'add_to_cart'])->middleware('userMiddleware');
Route::get('/add_to_cart_view', [UserController::class,'add_to_cart_view'])->middleware('userMiddleware');

Route::post('/add_to_cart_increash_product_quantity', [UserController::class,'add_to_cart_increash_product_quantity'])->middleware('userMiddleware');

Route::post('/add_to_cart_decrease_product_quantity', [UserController::class,'add_to_cart_decrease_product_quantity'])->middleware('userMiddleware');

Route::post('/add_to_cart_delete_product', [UserController::class,'add_to_cart_delete_product'])->middleware('userMiddleware');

Route::post('/add_to_cart_clear_all_product', [UserController::class,'add_to_cart_clear_all_product'])->middleware('userMiddleware');

Route::get('/order_checkout', [UserController::class,'order_checkout'])->middleware('userMiddleware');


// Route::get('/home', [UserController::class,'home_check'])->middleware('userMiddleware');

// account page
Route::get('/account', [UserController::class,'account_check'])->middleware('userMiddleware');
Route::post('/account_upadate', [UserController::class,'account_upadate']);
Route::post('/account_photo_update', [UserController::class,'account_photo_update']);

Route::view('/signin', 'userpanel.signin');
Route::post('/signin_submit', [UserController::class,'signin_submit']);

Route::view('/login', 'userpanel.login');
Route::post('/login_submit', [UserController::class,'login_submit']);

Route::get('/logout', [UserController::class,'logout']);

Route::view('/about', 'userpanel.about')->middleware('userMiddleware');
Route::view('/contact', 'userpanel.contact')->middleware('userMiddleware');



// address page
Route::get('/add_address_form', [UserController::class,'add_address_form'])->middleware('userMiddleware');
Route::post('/add_address_form_submit', [UserController::class,'add_address_form_submit'])->middleware('userMiddleware');

// address view page
Route::get('/address_view_page', [UserController::class,'address_view_page'])->middleware('userMiddleware');
// Route::post('/add_address_form_submit', [UserController::class,'add_address_form_submit'])->middleware('userMiddleware');

Route::post('/addresses_set_default/{address_id}', [UserController::class, 'addresses_set_default'])->middleware('userMiddleware');
Route::post('/addresses_delete/{address_id}', [UserController::class, 'addresses_delete'])->middleware('userMiddleware');



// User Panel End

Route::view('/a', 'a');




// Admin Panel Start

// Route::prefix('adminpanel')->group(function () {

Route::get('/admin_home', [AdminController::class,'admin_check'])->middleware('adminMiddleware');

Route::view('/admin_login', 'adminpanel.admin_login');
Route::post('/admin_login_submit', [AdminController::class,'admin_login']);

Route::get('/admin_logout', [AdminController::class,'admin_logout']);

Route::get('/admin_customer_accounts_view', [AdminController::class,'admin_customer_accounts_view'])->middleware('adminMiddleware');
Route::post('/admin_user_account_delete/{user_id}', [AdminController::class,'admin_user_account_delete'])->middleware('adminMiddleware');

Route::get('/admin_setting', [AdminController::class,'admin_setting'])->middleware('adminMiddleware');

Route::get('/admin_add_categorie', [AdminController::class,'admin_add_categorie'])->middleware('adminMiddleware');
Route::post('/admin_add_categorie_submit', [AdminController::class,'admin_add_categorie_submit'])->middleware('adminMiddleware');

Route::get('/admin_add_product', [AdminController::class,'admin_add_product'])->middleware('adminMiddleware');
Route::post('/admin_add_product_submit', [AdminController::class,'admin_add_product_submit'])->middleware('adminMiddleware');


Route::post('/admin_update_product/{product_id}', [AdminController::class,'admin_update_product'])->middleware('adminMiddleware');
Route::post('/admin_update_product_submit/{product_id}', [AdminController::class,'admin_update_product_submit'])->middleware('adminMiddleware');


Route::get('/admin_products_view', [AdminController::class,'admin_products_view'])->middleware('adminMiddleware');
Route::post('/admin_product_delete/{product_id}', [AdminController::class,'admin_product_delete'])->middleware('adminMiddleware');

    
// });

// Admin Panel End
