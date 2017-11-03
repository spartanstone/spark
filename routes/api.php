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

//userstuff

Route::resource('sparkUsers', 'SparkUserController');
Route::post('userdelete/{username}','SparkUserController@deleteUser');
Route::post('userupdate/{username}','SparkUserController@updateUser');
Route::post('groupupdate/{username}','SparkUserController@updateGroup');




//group stuff


Route::post('group','groupCreateController@setPropData');
Route::post('removegroup/{removegroup}','groupCreateController@removeGroup');


