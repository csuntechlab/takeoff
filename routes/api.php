<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('profile/store', 'ProfileController@createStudentUserInfo');
Route::post('admin/store', 'AdminController@createAdminUserInfo');

/* Endpoints that deal with user retrieval and management. */
Route::prefix('students')->group(function () {

    Route::get('all', 'AdminController@getAllStudents')->middleware('auth:api');

    Route::get('{id}', 'AdminController@getUserById');
    Route::get('major/{major}', 'AdminController@getStudentsByMajor')->middleware('auth:api');
    Route::get('graddate/{graddate}', 'AdminController@getStudentsByGradDate')->middleware('auth:api');
    Route::get('college/{college}', 'AdminController@getStudentsByCollege')->middleware('auth:api');

    Route::delete('delete/{id}', 'AdminController@deleteStudent')->middleware('auth:api', 'checkAdmin');

    Route::get('sortFirstName/ascend', 'AdminController@sortUserFirstNameAscending')->middleware('auth:api');
    Route::get('sortFirstName/descend', 'AdminController@sortUserFirstNameDescending')->middleware('auth:api');
    Route::get('sortLastName/ascend', 'AdminController@sortUserLastNameAscending')->middleware('auth:api');
    Route::get('sortLastName/descend', 'AdminController@sortUserLastNameDescending')->middleware('auth:api');
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
     * accessCode: string
     */
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout');
});

/* Endpoints dealing with media */
Route::prefix('media')->group(function () {
    Route::get('getMedia/{email}', 'MediaController@getMedia');
});

Route::post('workshop/create', 'WorkshopController@createWorkshop');
Route::get('workshop/get/{id}', 'WorkshopController@getWorkshop');
Route::get('workshop/attendance/get/{id}', 'WorkshopController@getAttendance');
Route::get('workshop/all', 'WorkshopController@getAllWorkshops');
Route::post('workshop/edit', 'WorkshopController@editWorkshop');
