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

Route::resource('/panda','PandaController');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('/typefood','TypeFoodController');

Route::get('/typefood/show/{id}', 'TypeFoodController@Show');

Route::get('/insert', 'TypeFoodController@insert');

Route::get('/typefood/delete/{id}', 'TypeFoodController@delete');
