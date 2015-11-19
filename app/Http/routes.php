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
date_default_timezone_set('Asia/Shanghai'); 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name?}', function ($name = "longlong") {
    return "Hello, ".$name;
});

//文章详情
Route::get('/article/create','ArticleController@create');
Route::post('/article/store','ArticleController@store');
Route::get('/article','ArticleController@index');
Route::get('/article/{id}','ArticleController@show');

