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
    return view('welcome');
});


Route::get('testView',function(){
	return view('index', ['name' => 'James']);
});

Route::get('user/{id}', 'UserController@showProfile');

Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
]);


