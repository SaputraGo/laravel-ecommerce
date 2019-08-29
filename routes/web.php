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

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){
	Route::get('/home', 'HomeController@index');	
	Route::get('/dashboard', 'DashboardController@index');	
	Route::get('/product', 'ProductController@index');	
	Route::get('/product/create', 'ProductController@create');	
	Route::post('/product/add', 'ProductController@add');	
	Route::get('/product/{id}/edit', 'ProductController@edit');	
	Route::post('/product/{id}/update', 'ProductController@update');
	Route::get('/product/{id}/delete', 'ProductController@delete');	
});
Route::group(['middleware' => ['auth']], function(){
	Route::post('/product/{id}/order', 'OrderController@order');
	Route::post('/order/tambah', 'OrderController@add');	
});
Route::get('/', 'HomeController@index');
Route::get('/product/{id}/detail', 'ProductController@detail');
Auth::routes();