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

<<<<<<< HEAD
Route::get('/pdf', 'FormController@pdf')->name('pdf');
=======

// login,auth
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// AdminPAge
ROute::get('/admin/homePage', 'PostController@index')->name('admin.home');
ROute::get('/admin/detail-table', 'PostController@detail')->name('admin.tabelDetail');
Route::view('/admin/summary', 'adminPage.summary')->name('admin.summary');

Auth::routes();
>>>>>>> fa8076fb4555c927a123c2674b9fd9dcfa5bebac
