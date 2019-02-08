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

// login,auth
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');




// AdminPage Inbound
Route::get('/', 'FormController@form')->name('form');
Route::post('/submit', 'FormController@submit')->name('submit');
Route::get('/pdf/{id}', 'FormController@pdf')->name('pdf');
Route::get('/admin/home', 'PostController@index')->name('admin.home');
Route::get('/admin/detail-table/{personalDetails}', 'PostController@detail')->name('admin.tabelDetail');
Route::delete('delete/{personalDetails}', 'PostController@delete')->name('delete');


// AdminPage
Route::get('/admin/home', 'PostController@index')->name('admin.home');
Route::get('/admin/detail-table/{personalDetails}', 'PostController@detail')->name('admin.tabelDetail');
Route::view('/admin/summary', 'adminPage.summary')->name('admin.summary');
Route::get('admin/file/{file}/download', 'PostController@download')->name('file.download');
// uncomment line dibawah untuk mematikan link register supaya user tidak bisa akses register
// Auth::routes(['register' => false]);
// uncomment line dibawah untuk menyalakan link register
Auth::routes();



// Admin Outbound
Route::get('/admin/out-home', 'outPostController@index')->name('admin.outHome');
Route::get('/admin/out-detail/{outPersonalDetails}', 'outPostController@detail')->name('admin.outDetail');
Route::get('/form-outbound', 'OutFormController@form')->name('form.out');
Route::post('/submit-outbond', 'OutFormController@submit')->name('submit.out');
Route::get('/out-pdf/{id}', 'OutFormController@pdf')->name('out.pdf');
Route::delete('out-delete/{outPersonalDetails}', 'outPostController@delete')->name('outDelete');
Route::view('/admin/summary', 'adminPage.summary')->name('admin.summary');


