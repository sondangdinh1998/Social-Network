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
    return view('landing');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/photo', function(){
    return view('photo');
});

Route::get('/video', function(){
    return view('video');
});