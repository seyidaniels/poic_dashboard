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
// Route::get('getinvite', 'HomeController@getInvite');
Route::get('forourheroes', 'HomeController@forOurHeroes');
Route::get('/terms-conditions', 'HomeController@terms');
Route::get('/dashboard', 'SinglePageController@index');
Route::get('verify/{email_token}', 'RegisterController@verifyUser');
Route::get('reset-password/{email_token}', 'PasswordsController@index')->name('password.request');
Route::post('password/reset', 'PasswordsController@submitRequest')->name('password.reset');
Route::get('archive', 'HomeController@archive');


// Admin Routes
Route::get('send-mails', 'AdminController@mailAll');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('view-login');
    Route::post('login', 'Auth\LoginController@authenticate')->name('login');
    Route::get('/logout', 'AdminController@logout');
    Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'is_admin']], function () {
        Route::get('/', 'AdminController@dashboard');
        Route::get('change-password', 'AdminController@viewPass');
        Route::post('update-password', 'AdminController@changePassword');
        Route::get('project/view/{id}', 'AdminController@viewProject');
        Route::get('projects', 'AdminController@getProjects');
        Route::post('score-project', 'AdminController@scoreProject');
        Route::group(['middleware' => ['is_super']], function () {
            Route::get('admin-management', 'AdminController@adminView');
            Route::get('teams', 'AdminController@getTeams');
            Route::get('team-heads', 'AdminController@heads');
            Route::post('create-admin', 'AdminController@createAdmin');
            Route::post('edit-admin', 'AdminController@updateAdminRole');
            Route::get('communication', 'AdminController@communicate');
            Route::post('send-mail', 'AdminController@mailAll');
            Route::post('add-reviewers', 'AdminController@addProjectReviewers');
            Route::get('scores', 'AdminController@viewScores');
            Route::get('project-analytics', 'AdminController@vewProjectAnalytics');
            Route::get('image', 'AdminController@imageIndex');
            Route::post('upload-image', 'AdminController@uploadImage');
            Route::post('resend-admin-invite', 'AdminController@resendAdminInvite');
        });
    });
});
