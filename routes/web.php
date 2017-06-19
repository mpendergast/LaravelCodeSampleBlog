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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/authors/{id}', 'AuthorController@index')->name('byAuthor');

Route::get('/articles/{id}', 'ArticleController@index')->name('article');
Route::get('/article/new', 'ArticleController@showCreateArticleForm')->middleware('auth')->name('writeArticle');
Route::post('/article/new', 'ArticleController@create')->middleware('auth')->name('createArticle');

Auth::routes();
