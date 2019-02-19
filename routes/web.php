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
    return view('spa');
});

//uncomment and run php artisan make:controller SpaController
//Route::get('/{any}', 'SpaController@index')->where('any', '.*');
