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

Route::get('/print', 'FormController@print')->name('print');

Route::get('/test', 'FormController@test')->name('test');

Route::get('/test-print', 'FormController@testPrint')->name('testPrint');

Route::post('/submit', 'FormController@submit')->name('submit');
