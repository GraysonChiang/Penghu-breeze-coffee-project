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

// 認證路由...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@validator');
Route::get('logout', 'Auth\AuthController@getLogout');


Route::get('/'		 , 'WelcomeController@index' );
Route::get('coffee' , 'WelcomeController@coffee');


Route::get('admin' , 'adminController@admin');
Route::get('admin/people' , 'adminController@adminpeople');
Route::post('admin/edit/{id}' , 'adminController@EditMemberdata');

