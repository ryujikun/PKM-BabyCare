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

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('json/{baby_id}', 'AjaxController@getJson');

Route::post('daftar', 'HomeController@register');

Route::group(['middleware' => ['web', 'roles']], function () {

    Route::group(['roles'=> [1,2,3]], function () {
        Route::get('editProfil', 'HomeController@profil');
        Route::post('editProfil', 'HomeController@profilPost');
        Route::get('profil','MotherController@profil');
    });
    Route::group(['roles'=> [1,2]], function () {
        Route::get('babydata/{id}', 'KaderController@updateBaby');
        Route::post('babydata/{id}', 'KaderController@updateBabyPost');
    });
    Route::group(['roles' => 1], function() {

        Route::get('/mother', 'MotherController@index');
        Route::get('dokterpeduli', 'MotherController@dokterpeduli');
        Route::post('dokterpeduli', 'MotherController@dokterpeduli');
        Route::get('explore', 'MotherController@explore');
        Route::post('explore', 'MotherController@explore');
        Route::get('motherzone','MotherController@motherzone');
        Route::post('motherzone', 'MotherController@motherzone');
        Route::get('pertumbuhanku','MotherController@pertumbuhanku');
        Route::post('pertumbuhanku','MotherController@pertumbuhanku');
        Route::get('pertumbuhanku/jadwal', 'MotherController@jadwal');
        Route::get('ibusiaga','MotherController@ibusiaga');
        Route::post('hapusfoto','MotherController@hapusfoto');
    });

    Route::group(['roles'=>2 ], function () {
        Route::get('kader', 'KaderController@index');
        Route::get('detailImun/{id}', 'KaderController@detail');
        Route::get('uploadImunisasi/{id}', 'KaderController@upload');
        Route::post('uploadImunisasi/{id}', 'KaderController@uploadPost');
        Route::get('babydata', 'KaderController@babydata');

    });

    Route::group(['roles'=>3 ], function () {
        Route::get('doctor', 'DoctorController@questions');
        Route::get('answer', 'DoctorController@unanswered');
        Route::get('answer/{id}', 'DoctorController@answer');
        Route::post('answer/{id}', 'DoctorController@answer');
        Route::get('question', 'DoctorController@index');

    });

});


