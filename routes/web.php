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
    return view('');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('phim/list','PhimController@index')->name('index');
Route::get('phim/create','PhimController@getadd')->name('getadd');
Route::post('phim/create', 'PhimController@postadd')->name('postadd');
Route::get('phim/edit', 'PhimController@getedit')->name('getedit');
Route::post('phim/edit', 'PhimController@postedit')->name('postedit');
Route::get('phim/delete', 'PhimController@getdelete')->name('getdelete');
Route::post('phim/delete', 'PhimController@postdelete')->name('postdelete');

Route::get('danhsach/list', 'DanhsachController@index')->name('index');

Route::get('thanhvien/list', 'ThanhvienController@index')->name('index');
//Route::get('thanhvien', 'ThanhvienController@index')->name('index');
Route::get('thanhvien/create', 'ThanhvienController@getadd')->name('getadd');
Route::post('thanhvien/create', 'ThanhvienController@postadd')->name('postadd');
Route::get('thanhvien/edit','ThanhvienController@getedit')->name('getedit');
Route::post('thanhvien/edit', 'ThanhvienController@postedit')->name('postedit');
Route::get('thanhvien/delete', 'ThanhvienController@getdelete')->name('getedelete');
Route::post('thanhvien/delete', 'ThanhvienController@postdelete')->name('postdelete');


Route::get('lienhe', 'LienheController@index')->name('getindex');


