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

Route::get('/', 'PostsController@listaposts');


Route::auth();

Route::get('/home', 'HomeController@index');

// Route::get('/tasks', 'TaskController@index');
// Route::post('/task', 'TaskController@store');
// Route::delete('/task/{task}', 'TaskController@destroy');

Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');

Route::get('/users', 'UserController@listusers');

Route::get('/addpost', 'PostsController@form');
Route::post('/gravapost', 'PostsController@gravapost');
Route::get('/artigo/{id}', 'PostsController@mostraartigo');