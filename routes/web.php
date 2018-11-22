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
    return view('frontends.index');
});
Route::get('/login', function () {
    return view('layouts.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kategori', 'KategoriController');
Route::resource('barang', 'BarangController');
Route::resource('tentang', 'TentangController');
Route::resource('artikel', 'ArtikelController');
Route::resource('kategoriartikel', 'KategoriArtikelController');

Route::group(['prefix'=> 'admin', 'middleware' => ['auth','role:admin']], function(){
    Route::resource('kategori','KategoriController');
    Route::resource('barang','BarangController');
    Route::resource('tentang','TentangController');
    Route::resource('artikel','ArtikelController');
    Route::resource('galeri','GaleriController');
    Route::resource('testimoni','TestimoniController');
    Route::resource('kategoriartikel','KategoriArtikelController');
    Route::resource('tag','TagController');
});
Route::get('/contact', function () {
    return view('frontends.contact');
});
Route::get('barang_kategori/{id}', 'BarangController@filter_barangs');
Route::get('artikel_kategori/{id}', 'ArtikelController@filter_artikels');
Route::get('/artikels/single/{artikels}', 'FrontEndController@single')->name('single');
Route::get('/produks/singleproduk/{barangs}', 'FrontEndController@singleproduk')->name('singleproduk');
Route::get('/produk', 'FrontEndController@barangs')->name('barangs');
Route::get('/blog', 'FrontEndController@artikels')->name('artikels');
Route::get('/index', 'FrontEndController@index')->name('index');
Route::get('/testimoni', 'FrontEndController@testimonis')->name('testimonis');
Route::get('/galeri', 'FrontEndController@galeris')->name('galeris');


