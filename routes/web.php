<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

use App\Http\Middleware\UserMiddleware;

// User Panel Start

// home page
Route::get('/home', [UserController::class,'home_check'])->middleware('userMiddleware');

// account page
Route::get('/account', [UserController::class,'account_check'])->middleware('userMiddleware');
Route::post('/account_upadate', [UserController::class,'account_upadate']);
Route::post('/account_photo_update', [UserController::class,'account_photo_update']);


Route::view('/signin', 'userpanel.signin');
Route::post('/signin_submit', [UserController::class,'signin_submit']);

Route::view('/login', 'userpanel.login');
Route::post('/login_submit', [UserController::class,'login_submit']);

Route::get('/logout', [UserController::class,'logout']);


Route::view('/about', 'userpanel.about');
Route::view('/contact', 'userpanel.contact');


// User Panel End

Route::view('/a', 'a');



// Admin Panel Start

// Route::prefix('adminpanel')->group(function () {

Route::view('/admin_login', 'adminpanel.admin_login');
Route::post('/admin_login_submit', [AdminController::class,'admin_login']);

Route::get('/admin_logout', [AdminController::class,'admin_logout']);


Route::get('/admin_home', [AdminController::class,'admin_check'])->middleware('adminMiddleware');

    
// });

// Admin Panel End
