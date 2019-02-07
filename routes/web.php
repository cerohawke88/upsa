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

Route::get('/', 'FormController@form')->name('form');
Route::post('/submit', 'FormController@submit')->name('submit');
Route::get('/pdf/{id}', 'FormController@pdf')->name('pdf');


// AdminPage Inbound
Route::get('/admin/homePage', 'PostController@index')->name('admin.home');
Route::get('/admin/detail-table/{personalDetails}', 'PostController@detail')->name('admin.tabelDetail');
Route::post('/admin/deletePost', 'PostController@delete')->name('admin.deletePost');
Route::delete('delete/{personalDetails}', 'PostController@delete')->name('delete');

//Outbound
Route::get('/form-outbond', 'OutFormController@form')->name('form.out');
Route::post('/submit-outbond', 'OutFormController@submit')->name('submit.out');
Route::get('/out-pdf/{id}', 'OutFormController@pdf')->name('out.pdf');

// Admin Outbound
Route::get('/admin/out-homePage', 'outPostController@index')->name('admin.outHome');
Route::get('/admin/out-detail/{outPersonalDetails}', 'outPostController@detail')->name('admin.outDetail');

Route::post('/admin/out-deletePost', 'outPostController@delete')->name('admin.outDeletePost');
Route::delete('out-delete/{personalDetails}', 'outPostController@delete')->name('outDelete');


Route::view('/admin/summary', 'adminPage.summary')->name('admin.summary');

