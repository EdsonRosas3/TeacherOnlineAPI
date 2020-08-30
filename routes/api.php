<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', 'Admin\UserController@login');
Route::post('register', 'Admin\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){

    //detail del user conectado
    Route::post('details', 'Admin\UserController@details');
    
   
    //users
    Route::put('users/{id}','Admin\UserController@update');
    Route::delete('users/{id}','Admin\UserController@destroy');

    //teachers
    Route::post('teachers','Admin\TeacherController@store');
    Route::put('teachers/{id}','Admin\TeacherController@update');
    Route::delete('teachers/{id}','Admin\TeacherController@destroy');
   
    //subjects
   
    Route::post('subjects','Admin\SubjectController@store');
    Route::put('subjects/{id}','Admin\SubjectController@update');
    Route::delete('subjects/{id}','Admin\SubjectController@destroy');


});


Route::get('subjects','Admin\SubjectController@index');
Route::get('subjects/{id}','Admin\SubjectController@show');

Route::get('users','Admin\UserController@index');
Route::get('users/{id}','Admin\UserController@show');
Route::post('users','Admin\UserController@store');

Route::get('teachers','Admin\TeacherController@index');
Route::get('teachers/{id}','Admin\TeacherController@show');

Route::get('students','Admin\StudentController@index');
Route::get('students/{id}','Admin\StudentController@totalStudents');

Route::post('qualifications','Admin\QualificationController@store');
Route::put('qualifications/{id}','Admin\QualificationController@update');
Route::get('qualifications/{id}','Admin\QualificationController@generalRating');
Route::get('qualifications','Admin\QualificationController@index');


