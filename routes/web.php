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

/*
 * Return the view of the single page application
 */
Route::get('/', function() {
    return view('spa');
});

Route::post('register', 'RegisterController@register');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');

Route::post('profile/store', 'ProfileController@createStudentUserInfo');
Route::post('admin/store', 'AdminController@createAdminUserInfo');

/*
 * Endpoints that deal with students data and filtering data
 */
Route::prefix('api/students')->group(function () {
    Route::get('major/{major}', 'AdminController@getStudentsByMajor');
    Route::get('graddate/{graddate}', 'AdminController@getStudentsByGradDate');
    Route::get('college/{college}', 'AdminController@getStudentsByCollege');
});

/*
 * Endpoints that deal with authentication work flows.
 */
Route::prefix('api/auth')->group(function () {
    Route::post('invite', 'RegisterController@registerStudentEmail');
    Route::post('register', 'RegisterController@completeRegistration');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout');
});

/*
 * Endpoints dealing with media
 */
Route::prefix('api/media')->group(function () {
    Route::get('getMedia/{email}', 'MediaController@getMedia');
});

Route::get('/docs', function() {
    return File::get(public_path() . '/docs/index.html');
});

Route::get('/docs/assets/css/*.css', function() {
    return File::get(public_path() . '/docs/assets/css/*.css');
});

Route::get('/docs/assets/js/*.js', function() {
    return File::get(public_path() . '/docs/assets/js/*.js');
});
