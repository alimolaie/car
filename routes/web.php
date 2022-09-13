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

Route::get('/','WebController@index');
Route::get('/product/view/{id}','WebController@viewProduct')->name('view.car');
Route::get('/about-us','WebController@aboutUs');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/dashboard', function (){
    return view('admin.dashboard');
});
Route::resource('/admin/product', 'ProductController');
Route::delete('/admin/product/delete/{id}', 'ProductController@delete');
Route::get('/admin/header/edit/', 'HeaderController@edit');
Route::post('/admin/header/update/', 'HeaderController@update');
Route::get('/admin/about-us/edit/', 'AboutUsController@edit');
Route::post('/admin/about-us/update/', 'AboutUsController@update');

Route::get('/info', function (){
    phpinfo();
});
