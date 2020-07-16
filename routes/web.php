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
Route::get('/new_login', 'LoginController@login')->name('_login');
Route::post('/new_login', 'LoginController@posts')->name('_postlogin');
Route::get('/new_register', 'LoginController@register')->name('_register');
Route::post('/new_register', 'LoginController@addregister')->name('_addregister');
Route::post('/new_logout', 'LoginController@logout')->name('_logout');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
//Admin
// Route::get('/dashboard' , 'AdminController@index');
Route::group(['middleware' => ['auth']], function(){
	Route::get('/dashboard' , 'ItemController@index')->middleware('cek_status');
	Route::get('/add-items' , 'ItemController@add')->name('add-items');
	Route::get('/edit-items/{id}' , 'ItemController@edit')->name('edit-items');
	Route::post('/add-items-proses' , 'ItemController@add_proses')->name('add-proses');
	Route::post('/edit-items-proses/{id}' , 'ItemController@edit_proses')->name('edit-proses');
	Route::get('/hapus-items/{id}' , 'ItemController@delete')->name('delete-items');
	Route::get('/add-stock/{id}' , 'ItemController@add_stock')->name('add-stock');
	Route::post('/add-stock/{id}' , 'ItemController@add_stock_proses')->name('add-stock-proses');
	Route::get('/produk-kosong' , 'ItemController@produk_kosong')->name('produk-kosong');
	Route::get('/produk-diskon' , 'ItemController@produk_diskon')->name('produk-diskon');
	Route::get('/payment', 'TransactionController@index')->name('list-payment');
	Route::get('/sudah_terkirim', 'TransactionController@sudah_terkirim')->name('sudah-terkirim');
	Route::post('/add-resi/{id}', 'TransactionController@add_resi')->name('add-resi');


	//Checkout
	Route::get('/checkout', 'CheckoutController@checkout')->name('_checkout');
	Route::get('/proses_checkout/{id}', 'CheckoutController@prosescheckout')->name('proses_checkout');
	Route::get('/bukti-transfer', 'CheckoutController@bukti_transfer')->name('bukti_transfer');
	Route::post('/bukti-transfer/{id}', 'CheckoutController@add_bukti')->name('add_transfer');
	Route::get('/my-cart','CheckoutController@mycart')->name('my-cart');

	//Member
	Route::get('/riwayat-belanja','FrontController@riwayat_belanja')->name('riwayat_belanja');
	Route::get('/setting_akun','FrontController@akun')->name('setting-akun');
	Route::post('/proses_setting/{id}','FrontController@set_akun')->name('proses-akun');

	// Route::get('/dashboard' , 'AdminController@index');

});
	// Cart
	Route::get('/keranjang','CartController@index')->name('cart');
	Route::post('/add-to-cart','CartController@getAddToCart')->name('add-to-cart');
	Route::get('/add-to-cart/del/{id}','CartController@delete')->name('del-cart');
	
	Route::get('/' , 'FrontController@index')->name('/');
	Route::get('detail-product/{id}' , 'FrontController@detail')->name('detail-product');
	Route::get('semua-product' , 'FrontController@semua_product')->name('semua_produk');
	Route::get('contact' , 'FrontController@contact')->name('contact');



