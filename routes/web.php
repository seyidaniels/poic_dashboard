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
Route::get('/terms-conditions', 'HomeController@terms');
Route::get('/dashboard', 'SinglePageController@index');
Route::get('verify/{email_token}', 'RegisterController@verifyUser');
Route::get('reset-password/{email_token}', 'PasswordsController@index')->name('password.request');
Route::post('password/reset', 'PasswordsController@submitRequest')->name('password.reset');



// Admin Routes
Route::get('send-mails', 'AdminController@mailAll');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::post('login', 'Auth\LoginController@authenticate')->name('login');
    Route::get('/logout', 'Auth\LoginController@disAuth');
    Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'is_admin']], function () {
        Route::get('/', 'AdminController@dashboard');
        Route::get('teams', 'AdminController@getTeams');
        Route::get('projects', 'AdminController@getProjects');
        Route::get('project/view/{id}', 'AdminController@viewProject');
    });
});