<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function(){
    return view('index');
});

Route::get('/aboutus', function(){
    return view('aboutus');
});

Route::get('/booking', function(){
    return view('booking');
});

Route::get('/contactus', function(){
    return view('contactus');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/gallery', function(){
    return view('gallery');
});


Route::get('/login', function(){
    return view('login');
});

Route::get('/Registration', function(){
    return view('Registration');
});

Route::get('/services', function(){
    return view('services');
});
