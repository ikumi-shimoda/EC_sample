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

Route::get('/', 'MainController@index')->name('home');
Route::get('sale', 'ProductController@sale')->name('product.sale');
Route::get('search', 'SearchController@index')->name('search.index');
// Route::get('/admin', 'Auth\LoginController')->name('admin.index');

