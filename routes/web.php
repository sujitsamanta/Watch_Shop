<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserMiddleware;

// User Panel Start
Route::get('/', [UserController::class,'home_check']);

Route::view('/sign_in', 'userpanel.sign_in');
Route::post('/signin_submit', [UserController::class,'signin_submit']);

Route::view('/log_in', 'userpanel.log_in');
Route::post('/login_submit', [UserController::class,'login_submit']);

Route::get('/log_out', [UserController::class,'log_out']);


Route::view('/about', 'userpanel.about');
Route::view('/contact', 'userpanel.contact');

// User Panel End



// Admin Panel Start

Route::prefix('adminpanel')->group(function () {
Route::view('/admin', 'adminpanel.admin_home');
    
});

// Admin Panel End
