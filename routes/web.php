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

Route::post('/submit', 'FormController@submit')->name('submit');

Route::get('/pdf', 'FormController@pdf')->name('pdf');
