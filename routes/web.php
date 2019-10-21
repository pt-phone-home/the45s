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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/weddings', 'PagesController@weddings')->name('weddings');
Route::get('/songs-services', 'PagesController@songs_services')->name('songs-services');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/conact', 'PagesController@contact')->name('contact');
Route::post('/conact', 'PagesController@sendMail')->name('contact.send');