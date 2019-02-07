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

Route::view('/form-outbond', 'formPage.formOut')->name('form.out');

Route::delete('delete/{personalDetails}', 'PostController@delete')->name('delete');