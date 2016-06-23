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

// http://localhost:8000
Route::get('/', function () {
    return view('welcome');
});

// http://localhost:8000/about1
Route::get('about1', 'AboutController@index1');

// http://localhost:8000/articles
Route::get('articles', 'ArticlesController@index');

// http://localhost:8000/articles/1
Route::get('articles/1', function(){ return "<h1>article page not link View</h1>"; });

// http://localhost:8000/articles/2
Route::get('articles/2', function(){ return view('articles2'); });

// http://localhost:8000/categories
Route::get('categories', function(){ return "This is categories page."; });

// http://localhost:8000/categories/main
Route::get('categories/main', 'CategoriesController@main');

// http://localhost:8000/categories/show/1
Route::get('categories/show/{id}', 'CategoriesController@show');

// http://localhost:8000/categories/show2
// http://localhost:8000/categories/show2/1
Route::get('categories/show2/{id?}', 'CategoriesController@show2');

// http://localhost:8000/categories/page/1
// http://localhost:8000/categories/page/1/Laravel
Route::get('categories/page/{id}/{title?}','CategoriesController@page')->where(['id' => '[0-9]+', 'title' => '[a-zA-Z]+']);

// กำหนดเส้นทางทั้ง controller โดย ชื่อ method ต้องขึ้นต้นด้วย http verb เช่น getIndex()
// http://localhost:8000/pages/
// http://localhost:8000/pages/show-id
// http://localhost:8000/pages/about
// http://localhost:8000/pages/contact
// http://localhost:8000/pages/welcome-blade
Route::controller('pages', 'PagesController');

Route::get('/contact/{name}', function($name){ return 'Hello'.$name; });

Route::get('/about', function () {
    $info = [
                    'codingthailand.com',
                    'codingthailand@gmail.com',
                    '085-4952624'
          ];
    return view('about')->with('info', $info);
});


Route::get('/site', function(){ 
    $name ="A";
    return view('site.index',['name' => $name]);    
});

Route::get('product', 'ProductController@index');

Route::resource('panda','PandaController');

Route::auth();

Route::get('/home', 'HomeController@index');
