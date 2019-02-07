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

Route::get('/', 'FormController@form')->name('form');

Route::post('/submit', 'FormController@submit')->name('submit');

Route::get('/pdf/{id}', 'FormController@pdf')->name('pdf');


// AdminPage
Route::get('/admin/home', 'PostController@index')->name('admin.home');
Route::get('/admin/detail-table/{personalDetails}', 'PostController@detail')->name('admin.tabelDetail');
Route::view('/admin/summary', 'adminPage.summary')->name('admin.summary');
Route::get('admin/file/{file}/download', 'PostController@download')->name('file.download');

Auth::routes();


Route::get('/files', function() {
	return view('upload');
});

Route::post('upload', 'UploadController@upload');

Route::get('/form-outbond', 'OutFormController@form')->name('form.out');
Route::post('/submit-outbond', 'OutFormController@submit')->name('submit.out');
Route::get('/pdf/{id}', 'OutFormController@pdf')->name('out.pdf');



Route::view('/admin/out-homePage', 'adminPage.outDashboard')->name('admin.outHome');
Route::view('/admin/out-detail', 'adminPage.outDetail')->name('admin.outDetail');
Route::view('/form-outbond', 'formPage.formOut')->name('form.out');

Route::delete('delete/{personalDetails}', 'PostController@delete')->name('delete');

