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



//Route::post('posts',['as'=>'create_post','uses'=>'PostController@store']);

Route::group(['middleware'=>['web']],function(){

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
*/

Route::resource('posts','PostController');

});