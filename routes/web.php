<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/sign_in', 'sign_in');

Route::view('/about', 'about');

Route::view('/contact', 'contact');

