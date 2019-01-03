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

Route::get('/','ArticleController@articleList');

Route::get('single/{id}','ArticleController@details');

Route::get('archive','ArticleController@archive');



Route::prefix('admin')->group(function(){
	Route::get('admin-login',function(){
				return view('admin.admin-login');
		})->name('admin-login');
	Route::get('/index', 'HomeController@index')->name('index');
	Route::get('admin-list','AdminController@adminList');
	
	Route::get('admin-post','AdminController@adminPost');
	Route::post('saveNewArticle','AdminController@saveNewArticle');
	Route::get('editArticle/{id}','AdminController@editArticle');
	Route::post('updateArticle','AdminController@updateArticle');
});

//Route::get('admin-post','AdminController@adminPost');


Auth::routes();


