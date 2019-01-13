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


Route::get('login', function(){
	if($authflag) {
		return view('welcome');
	}
});
Route::get('/','FrontEndController@barangs');
Route::get('/produks/show/{barangs}', 'FrontEndController@show')->name('show');
Route::get('/blogs/showblog/{artikels}', 'FrontEndController@showblog')->name('showblog');
Route::get('/shop', 'FrontEndController@shop');
Route::get('/about', 'FrontEndController@about');
Route::get('/blog', 'FrontEndController@artikels');
Route::get('/contact', 'FrontEndController@contact');
Route::get('/registration','FrontEndController@reg');
Route::post('/registration', 'FrontEndController@create')->name('registration.create');
Route::get('/log', 'FrontEndController@log');
Route::get('/carts', 'FrontEndController@cart')->name('cart')->middleware('auth');
Route::get('/confirmation', 'FrontEndController@confir')->name('checkout.index');
Route::get('/checkoutss', 'FrontEndController@check');
Route::get('/shop/{id}', 'FrontEndController@filter_barangs')->name('filter_barangs');

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
    Route::resource('artikel','ArtikelController');
    Route::resource('kategori','KategoriController');
    Route::resource('barang','BarangController');
    Route::resource('checkout','CheckOutController');
    Route::resource('cart','CartController');
    Route::resource('user','UserController');
});

