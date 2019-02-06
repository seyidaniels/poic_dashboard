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

Route::get('/', 'HomeController@index');
Route::get('/timeline', 'HomeController@timeline');
Route::get('/rules', 'HomeController@rule');
Route::get('/faq', 'HomeController@faq');
Route::get('/dashboard', 'SinglePageController@index');


Route::get('verify/{email_token}', 'RegisterController@verifyUser');
Route::get('reset-password/{email_token}', 'PasswordsController@index')->name('password.request');
Route::post('password/reset', 'PasswordsController@submitRequest')->name('password.reset');



// Admin Routes

Route::get('send-mails', 'AdminController@mailAll');