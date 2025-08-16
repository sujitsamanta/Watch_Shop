<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Signin_Controller;
use App\Http\Controllers\Login_Controller;

Route::view('/', 'home');

Route::view('/sign_in', 'sign_in');
Route::post('/signin_submit', [Signin_Controller::class,'signin_submit']);

Route::view('/log_in', 'log_in');
Route::post('/login_submit', [Login_Controller::class,'login_submit']);

// Route::post('/log_submit', 'login_in');



Route::view('/about', 'about');

Route::view('/contact', 'contact');

