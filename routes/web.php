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
Route::post('berita-status/{id}', 'BeritaController@beritastatus');

Route::resource('video','VideoController');
Route::get('video-data/{id}', 'VideoController@data')->name('video.data');
Route::post('video-status/{id}', 'VideoController@videostatus');

Route::resource('foto','FotoController');
Route::get('foto-data/{id}', 'FotoController@data')->name('foto.data');
Route::post('foto-status/{id}', 'FotoController@fotostatus');

Route::resource('kontak','KontakController');
Route::get('kontak-data/{id}', 'KontakController@data')->name('kontak.data');

Route::resource('slider','SliderController');
Route::get('slider-data/{id}', 'SliderController@data')->name('slider.data');


// -------------- FRONT END

Route::get('/', 'FrontHomeController@index')->name('front.homeindex');
Route::get('/profil-ulp', 'FrontProfileController@index')->name('front.profileindex');
Route::get('/visi-misi-ulp', 'FrontVisiMisiController@index')->name('front.visimisi');
Route::get('/struktur-organisasi-ulp', 'FrontStrukturOrgController@index')->name('front.strukturorg');

// -------------- FRONT END