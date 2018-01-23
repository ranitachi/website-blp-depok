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

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::post('/logout','UserController@performLogout');

Route::get('/dashboard-admin', 'DashboardController@index')->name('dashboard-admin.index');

Route::resource('struktur-organisasi','ProfilController');
Route::resource('visi-misi','ProfilController');
Route::resource('profil','ProfilController');
Route::get('profil-data/{category}', 'ProfilController@data')->name('profil.data');
Route::get('profil-form/{id}/{category}', 'ProfilController@show')->name('profil.form');

Route::resource('kategori','KategoriController');
Route::get('kategori-data/{id}', 'KategoriController@data')->name('kategori.data');
Route::post('kategori-status/{id}', 'KategoriController@status');

Route::resource('berita','BeritaController');
Route::get('berita-data/{id}', 'BeritaController@data')->name('berita.data');
Route::get('berita-status/{id}/{st}', 'BeritaController@beritastatus');

Route::resource('regulasi','RegulasiController');
Route::get('regulasi-data/{id}', 'RegulasiController@data')->name('regulasi.data');
Route::get('regulasi-status/{id}/{st}', 'RegulasiController@regulasistatus')->name('regulasi.status');

Route::resource('video','VideoController');
Route::get('video-data/{id}', 'VideoController@data')->name('video.data');
Route::get('video-status/{id}/{st}', 'VideoController@videostatus');

Route::resource('user','UserController');
Route::get('user-data/{id}', 'UserController@data')->name('user.data');
Route::post('user-status/{id}', 'UserController@user.tatus');

Route::resource('foto','FotoController');
Route::get('foto-data/{id}', 'FotoController@data')->name('foto.data');
Route::post('foto-status/{id}', 'FotoController@fotostatus');

Route::resource('kontak','KontakController');
Route::get('kontak-data/{id}', 'KontakController@data')->name('kontak.data');

Route::resource('stat','StatController');
Route::get('stat-data/{bln}/{thn}', 'StatController@data')->name('stat.data');

Route::resource('slider','SliderController');
Route::get('slider-data/{id}', 'SliderController@data')->name('slider.data');
Route::get('slider-status/{id}/{st}', 'SliderController@sliderstatus');

Route::get('web-rekanan', 'WebRekananController@index')->name('webrekanan.index');
Route::get('web-rekanan/create', 'WebRekananController@create')->name('webrekanan.create');
Route::post('web-rekanan/store', 'WebRekananController@store')->name('webrekanan.store');
Route::get('web-rekanan/{id}/edit', 'WebRekananController@edit')->name('webrekanan.edit');
Route::post('web-rekanan/{id}/update', 'WebRekananController@update')->name('webrekanan.update');
Route::get('web-rekanan/{id}/delete', 'WebRekananController@destroy')->name('webrekanan.delete');

// -------------- FRONT END

Route::get('/', 'FrontHomeController@index')->name('front.homeindex');
Route::get('/profil-ulp', 'FrontProfileController@index')->name('front.profileindex');
Route::get('/visi-misi-ulp', 'FrontVisiMisiController@index')->name('front.visimisi');
Route::get('/struktur-organisasi-ulp', 'FrontStrukturOrgController@index')->name('front.strukturorg');
Route::get('/dokumentasi-foto', 'FrontFotoController@index')->name('front.foto');
Route::get('/dokumentasi-video', 'FrontVideoController@index')->name('front.video');
Route::get('/kategori-berita/{id}', 'FrontBeritaByKatController@index')->name('front.newsbycat');
Route::get('/kontak-lembaga', 'FrontKontakLembagaController@index')->name('front.kontak');
Route::get('/data-regulasi', 'FrontRegulasiController@index')->name('front.regulasi');
Route::get('/adddownload/{id}', 'FrontRegulasiController@adddownload')->name('front.adddownload');
Route::get('/detail-berita/{id}', 'FrontBeritaController@index')->name('front.berita');
Route::get('/search', 'SearchBeritaController@result')->name('search.result');

// -------------- FRONT END