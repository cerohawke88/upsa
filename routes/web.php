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
    return view('create');
});
Route::get('index/form', 'testing@form')->name('index.form');
Route::post('index', 'testing@index')->name('index.create');

Route::get('/print', 'testing@print')->name('pages.print');