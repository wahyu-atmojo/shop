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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/login','LoginController@login' );
// Route::post('/loginpost', 'LoginController@loginPost');
// Route::post('/addregister', 'LoginController@addregister');

//Admin
// Route::get('/dashboard' , 'AdminController@index');
Route::get('/dashboard' , 'ItemController@index');
Route::get('/add-items' , 'ItemController@add')->name('add-items');
Route::post('/add-items-proses' , 'ItemController@add_proses')->name('add-proses');

//Member
// Route::get('/dashboard' , 'AdminController@index');
Route::get('/' , 'FrontController@index');
Route::get('detail-product' , 'FrontController@detail')->name('detail-product');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
