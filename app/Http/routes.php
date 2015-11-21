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

Route::get('/user/{name?}', function ($name = "longlong") {
    return "Hello, ".$name;
});

//文章详情
// Route::get('/article/create','ArticleController@create');
// Route::post('/article','ArticleController@store');
// Route::get('/article','ArticleController@index');
// Route::get('/article/{id}','ArticleController@show');
Route::resources(['article' => 'ArticleController']);

//用户登录注册

Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');




