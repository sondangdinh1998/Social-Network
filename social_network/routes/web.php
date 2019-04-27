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
})->name('landing');

Route::post('/login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@login'
]);

Route::post('/register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@register'
]);

Route::get('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/profile/{id}', [
    'as' => 'profile_id',
    'uses' => 'ProfileController@index'
]);

Route::get('/profile/{id}/save_info', [
    'as' => 'get_profile_save_info',
    'uses' => 'ProfileController@get_profile_save_info'
]);

Route::post('/profile/{id}/save_info', [
    'as' => 'profile_save_info',
    'uses' => 'ProfileController@profile_save_info'
]);

Route::post('/profile/{id}/update_profile_photo', [
    'as' => 'update_profile_photo',
    'uses' => 'ProfileController@update_profile_photo'
]);

/*
 * Route created by yenbka
 */
Route::get('/friend', function (){
    return view('friend');
});
//end route friend 

/*
 * Route created by yenbka
 */
Route::get('/chat', function (){
    return view('chat');
});
//end route chat

Route::get('/photo', function(){
    return view('photo');
});

Route::get('/video', function(){
    return view('video');
});

Route::get('/newsfeed', function(){
    return view('newsfeed');
})->name('newsfeed');

Route::get('/about/{id}', [
    'as' => 'about',
    'uses' => 'AboutController@index'
]);