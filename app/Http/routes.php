<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layouts.templates');
});

Route::auth();
//
Route::group(['middleware' => ['web', 'roles']], function () {

    Route::group(['roles'=>1], function() {

        Route::get('dokterpeduli', 'MotherController@dokterpeduli');
        Route::post('dokterpeduli', 'MotherController@dokterpeduli');
        Route::get('explore', 'MotherController@explore');
        Route::post('explore', 'MotherController@explore');
        Route::get('babyzone','MotherController@babyzone');
        Route::get('motherzone','MotherController@motherzone');
        Route::post('motherzone', 'MotherController@motherzone');
        Route::get('pertumbuhanku','MotherController@pertumbuhanku');
        Route::get('pertumbuhanku/jadwal', 'MotherController@jadwal');
        Route::get('ibusiaga','MotherController@ibusiaga');
    });

    Route::group(['roles'=>3 ], function () {

        Route::get('answer', 'DoctorController@index');
        Route::get('question', 'DoctorController@index');

    });

});


