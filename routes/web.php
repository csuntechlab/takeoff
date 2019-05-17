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

/* Return the view of the single page application */
Route::get('/', function() {
    return view('spa');
});

Route::get('{any}', function () {
    return view('spa');
})->where('any','.*');
