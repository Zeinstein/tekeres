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

Route::get('/', 'PageController@showIndex')->name('index');
Route::get('/kapcsolat', 'PageController@showContact')->name('contact');
Route::post('/kapcsolat', 'FormController@contactForm')->name('contactForm');
Route::get('/taborok', 'PageController@showCamps')->name('taborok');
