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


Route::auth();

Route::get('/dashboard', 'Backend\DashBoardController@index');

Route::resource('backend/users', 'Backend\UsersController', ['except' => ['show']]);
Route::get('backend/users/{users}/delete', ['as' => 'backend.users.delete', 'uses' => 'Backend\UsersController@delete']);


Route::resource('backend/pages', 'Backend\PagesController', ['except' => ['show']]);
Route::get('backend/pages/{pages}/delete', ['as' => 'backend.pages.delete', 'uses' => 'Backend\PagesController@delete']);


Route::resource('backend/posts', 'Backend\PostsController', ['except' => ['show']]);
Route::get('backend/posts/{posts}/delete', ['as' => 'backend.posts.delete', 'uses' => 'Backend\PostsController@delete']);
