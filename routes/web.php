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

Route::get('/docs', function() {
    return File::get(public_path() . '/docs/index.html');
});

Route::get('/docs/assets/css/*.css', function() {
    return File::get(public_path() . '/docs/assets/css/*.css');
});

Route::get('/docs/assets/js/*.js', function() {
    return File::get(public_path() . '/docs/assets/js/*.js');
});

Route::resource('profile', 'ProfileController');

Route::post('register', 'RegisterController@register');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');

Route::get('/media/{email}', 'MediaController@getMedia');

Route::get('/inviteemail', function() {
    return view('inviteemail');
});

Route::get('/{any}', 'SpaController@index')->where('any', '.*');

