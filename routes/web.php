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


Route::get('/login', function () {
    return view('layouts.login');
});
Route::get('/','FrontEndController@barangs');
Route::get('/produks/show/{barangs}', 'FrontEndController@show')->name('show');
Route::get('/shop', 'FrontEndController@all');
Route::get('/contact', 'FrontEndController@contact');
Route::get('/registration','FrontEndController@reg');
Route::post('/registration', 'FrontEndController@create')->name('registration.create');
Route::get('/log', 'FrontEndController@log');
Route::get('/category', 'FrontEndController@categ');
Route::get('/carts', 'FrontEndController@cart');
Route::get('/confirmation', 'FrontEndController@confir')->name('confirmation.index');
Route::get('/checkoutss', 'FrontEndController@check');
Route::post('/checkouts', 'FrontEndController@storeCheck')->name('checkout.store');
Route::get('/category/{id}', 'FrontEndController@filter_barangs')->name('filter_barangs');

Route::get('/',function (){
		return view('frontend.index');
	});


//BackEnd
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['web','auth']], function(){
	
	Route::get('/home',function(){
		if(Auth::user()->admin == 0){
			return view('frontend.index');
		} else {
			$users['users'] = \App\User::all();
			return view('layouts.admin',$users);
		}
	});
    Route::resource('kategori','KategoriController');
    Route::resource('barang','BarangController');
    Route::resource('checkout','CheckOutController');
    Route::resource('cart','CartController');
    Route::resource('user','UserController');
});

