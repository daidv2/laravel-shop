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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'cates'], function () {
        Route::get('list', ['as' => 'admin.cates.getList', 'uses' => 'CateController@getList']);
        Route::get('add', ['as' => 'admin.cates.getAdd', 'uses' => 'CateController@getAdd']);
        Route::post('add', ['as' => 'admin.cates.postAdd', 'uses' => 'CateController@postAdd']);
        Route::get('edit/{id}', ['as' => 'admin.cates.getEdit', 'uses' => 'CateController@getEdit']);
        Route::post('edit/{id}', ['as' => 'admin.cates.postEdit', 'uses' => 'CateController@postEdit']);
        Route::get('delete/{id}', ['as' => 'admin.cates.getDelete', 'uses' => 'CateController@getDelete']);
    });
    Route::delete('products/delete', ['as' => 'products.delete', 'uses' => 'ProductController@delete']);
    Route::resource('products', 'ProductController');
    Route::resource('users', 'UserController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
