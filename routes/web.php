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
Route::get('/edit-items/{id}' , 'ItemController@edit')->name('edit-items');
Route::post('/add-items-proses' , 'ItemController@add_proses')->name('add-proses');
Route::post('/edit-items-proses/{id}' , 'ItemController@edit_proses')->name('edit-proses');
Route::get('/hapus-items/{id}' , 'ItemController@delete')->name('delete-items');
Route::get('/add-stock/{id}' , 'ItemController@add_stock')->name('add-stock');
Route::post('/add-stock/{id}' , 'ItemController@add_stock_proses')->name('add-stock-proses');
Route::get('/produk-kosong' , 'ItemController@produk_kosong')->name('produk-kosong');
Route::get('/produk-diskon' , 'ItemController@produk_diskon')->name('produk-diskon');


//Member
// Route::get('/dashboard' , 'AdminController@index');
Route::get('/' , 'FrontController@index')->name('/');
Route::get('detail-product/{id}' , 'FrontController@detail')->name('detail-product');
Route::get('semua-product' , 'FrontController@semua_product')->name('semua_produk');
Route::get('contact' , 'FrontController@contact')->name('contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
