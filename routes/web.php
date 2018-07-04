<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Authentication routes
Route::get('auth/login', ['as'=>'login','uses'=>'Auth\LoginController@showLoginForm']);
Route::post('auth/login', ['as'=>'login','uses'=>'Auth\LoginController@login']);
Route::get('auth/logout',['as'=>'logout','uses'=>'Auth\LoginController@logout']);

//Registration routes
Route::get('auth/register','Auth\RegisterController@showRegistrationForm');
Route::post('auth/register','Auth\RegisterController@postregister');

// Password reset route
Route::get('password/reset', ['as'=>'password.request', 'uses'=>'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email', ['as'=>'password.email', 'uses'=>'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset/{token}', ['as'=>'password.reset', 'uses'=>'Auth\ResetPasswordController@showResetForm']);
route::post('password/reset', [ 'uses'=>'Auth\ResetPasswordController@reset']);

// Category
Route::Resource('categories','CategoryController', ['except'=>['create']]);

//Tags
Route::Resource('tags','TagController', ['except'=>['create']]);


Route::get('blog/{slug}', ['as'=> 'blog.single', 'uses'=>'BlogController@getSingle']) ->where('slug', '[\w\d\-\_]+');
Route::get('blog',['as'=>'blog.index', 'uses'=>'BlogController@getIndex']);
Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

Route::resource('posts', 'PostController');


