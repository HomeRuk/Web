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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/typefood','TypeFoodController@index');

Route::get('/typefood/show/{typefood_id?}','TypeFoodController@show')->where('typefood_id', '[0-9]+');

Route::get('/typefood/{typefood_id?}/edit','TypeFoodController@edit');









?>