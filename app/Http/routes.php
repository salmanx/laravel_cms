<?php


// Route::auth();

Route::group(['prefix' => 'sitecontrol'], function(){

	Route::get('/login', 'Auth\AuthController@showLoginForm');

	Route::post('/login', 'Auth\AuthController@login');

	Route::get('/logout', 'Auth\AuthController@logout');

	/*  
	Route::get('/register', 'Auth\AuthController@showRegistrationForm')
	Route::post('/register', 'Auth\AuthController@register')
	*/

});


Route::get('/dashboard', 'Backend\DashBoardController@index');

Route::resource('backend/users', 'Backend\UsersController', ['except' => ['show']]);
Route::get('backend/users/{users}/delete', ['as' => 'backend.users.delete', 'uses' => 'Backend\UsersController@delete']);

Route::resource('backend/pages', 'Backend\PagesController', ['except' => ['show']]);
Route::get('backend/pages/{pages}/delete', ['as' => 'backend.pages.delete', 'uses' => 'Backend\PagesController@delete']);

Route::resource('backend/posts', 'Backend\PostsController', ['except' => ['show']]);
Route::get('backend/posts/{posts}/delete', ['as' => 'backend.posts.delete', 'uses' => 'Backend\PostsController@delete']);

Route::resource('backend/notices', 'Backend\NoticesController', ['except' => ['show']]);
Route::get('backend/notices/{notices}/delete', ['as' => 'backend.notices.delete', 'uses' => 'Backend\NoticesController@delete']);

Route::resource('backend/categories', 'Backend\CategoriesController', ['except' => ['show']]);
Route::get('backend/categories/{categories}/delete', ['as' => 'backend.categories.delete', 'uses' => 'Backend\CategoriesController@delete']);

Route::resource('backend/news', 'Backend\NewsController', ['except' => ['show']]);
Route::get('backend/news/{news}/delete', ['as' => 'backend.news.delete', 'uses' => 'Backend\NewsController@delete']);

Route::resource('backend/adminstrations', 'Backend\AdminstrationsController', ['except' => ['show']]);
Route::get('backend/adminstrations/{adminstrations}/delete', ['as' => 'backend.adminstrations.delete', 'uses' => 'Backend\AdminstrationsController@delete']);

Route::resource('backend/slider', 'Backend\SliderController', ['except' => ['show']]);



