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

Route::prefix('api/')->group(function () {
    Route::post('profile/store', 'ProfileController@createStudentUserInfo')->middleware('auth:api');
    Route::post('admin/store', 'AdminController@createAdminUserInfo')->middleware('auth:api', 'checkAdmin');

    /* Endpoints that deal with students data and filtering data */
    Route::prefix('students')->group(function () {
        Route::get('all', 'AdminController@getAllStudents')->middleware('auth:api');
        Route::get('major/{major}', 'AdminController@getStudentsByMajor')->middleware('auth:api');
        Route::get('graddate/{graddate}', 'AdminController@getStudentsByGradDate')->middleware('auth:api');
        Route::get('college/{college}', 'AdminController@getStudentsByCollege')->middleware('auth:api');
        Route::delete('delete/{id}', 'AdminController@deleteStudent')->middleware('auth:api', 'checkAdmin');
    });

    /* Endpoints that deal with authentication work flows. */
    Route::prefix('auth')->group(function () {
        /**
         * FORM BODY:
         * email: string
         */
        Route::post('invite/student', 'RegisterController@registerStudentEmail')->middleware('auth:api', 'checkAdmin');
        /**
         * FORM BODY:
         * email: string
         */
        Route::post('invite/admin', 'RegisterController@registerAdminEmail')->middleware('auth:api', 'checkAdmin');
        /**
         * FORM BODY:
         * name: string
         * email: string
         * password: string
         * password_confirmation: string
         * accessCode: int
         */
        Route::post('register', 'RegisterController@completeRegistration');
        /**
         * FORM BODY:
         * email: string
         * password: string
         */
        Route::post('login', 'LoginController@login');
        Route::get('logout', 'LoginController@logout');
    });

    /* Endpoints dealing with media */
    Route::prefix('media')->group(function () {
        Route::get('getMedia/{email}', 'MediaController@getMedia');
    });
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

Route::get('{any}', function () {
    return view('spa');
})->where('any','.*');
