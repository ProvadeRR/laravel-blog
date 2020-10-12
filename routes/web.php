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


Route::group(['middleware' => 'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['middleware' => 'isAdmin' , 'namespace' => 'Admin' , 'prefix' => 'admin' , 'as' => 'admin.'],function(){
    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/categories', 'AdminController@categories')->name('categories');
    Route::resource('posts', 'AdminPostController');
    Route::resource('categories', 'AdminCategoryController');
});
Auth::routes();
Route::group(['namespace' => 'All'], function(){
    Route::get('/', 'MainController@index')->name('main.index');
    Route::get('/categories', 'CategoryController@all')->name('category.all');
    Route::post('/{id}/comentary', 'ComentaryController@create')->name('comentary.create');
    Route::get('/{slug}', 'CategoryController@show')->name('category.show');
    Route::get('/{slug_category}/{slug_post}', 'PostController@full')->name('post.full');

});


