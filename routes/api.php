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


/**
 * FORM BODY:
 * userId: id
 * firstName: string
 * lastName: string
 * major: string
 * expectedGrad: string
 * college: string
 * biography: string
 * research: string
 * funFacts: string
 * academicInterests: string
 * archive: bool
 */
Route::post('profile/store', 'ProfileController@createStudentUserInfo');
/**
 * FORM BODY:
 * firstName: string
 * lastName: string
 * title: string
 */
Route::post('admin/store', 'AdminController@createAdminUserInfo');

/* Endpoints that deal with user retrieval and management. */
Route::prefix('students')->group(function () {

    Route::get('all', 'AdminController@getAllStudents')->middleware('auth:api');
    Route::get('{id}', 'AdminController@getUserById');
    Route::get('major/{major}', 'AdminController@getStudentsByMajor')->middleware('auth:api');
    Route::get('graddate/{graddate}', 'AdminController@getStudentsByGradDate')->middleware('auth:api');
    Route::get('college/{college}', 'AdminController@getStudentsByCollege')->middleware('auth:api');
    Route::get('sortFirstName/ascend', 'AdminController@sortUserFirstNameAscending')->middleware('auth:api');
    Route::get('sortFirstName/descend', 'AdminController@sortUserFirstNameDescending')->middleware('auth:api');
    Route::get('sortLastName/ascend', 'AdminController@sortUserLastNameAscending')->middleware('auth:api');
    Route::get('sortLastName/descend', 'AdminController@sortUserLastNameDescending')->middleware('auth:api');
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
     * accessCode: string
     */
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout');
});

/* Endpoints dealing with media */
Route::prefix('media')->group(function () {
    Route::get('getMedia/{email}', 'MediaController@getMedia');
});

Route::prefix('workshop')->group(function () {
    /**
     * FORM BODY:
     * instructor: string
     * about_instructor: string
     * assignment_info: string
     * workshop_name: string
     * workshop_description: string
     * date: date
     */
    Route::post('create','WorkshopController@createWorkshop');
    /**
     * FORM BODY:
     * workshopId: int
     * instructor: string
     * about_instructor: string
     * assignment_info: string
     * workshop_name: string
     * workshop_description: string
     */
    Route::post('edit', 'WorkshopController@editWorkshop');
    Route::get('get/{id}', 'WorkshopController@getWorkshop');
    Route::get('all', 'WorkshopController@getAllWorkshops');

});
