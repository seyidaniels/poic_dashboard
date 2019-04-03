<?php
Route::post('register', 'RegisterController@register');
Route::post('login', 'LoginController@login');
Route::post('recover', 'PasswordsController@recover');
Route::post('resend-verification', 'LoginController@resendVerification');
Route::group(['middleware' => ['jwt.auth']], function () {
    Route::post('logout', 'LoginController@logout');
    Route::post('create-team', 'TeamController@createTeam');
    Route::get('has-team', 'TeamController@userHasTeam');
    Route::get('get-notifications', 'NotificationsController@getNotifications');
    Route::get('get-team', 'TeamController@getTeam');
    Route::post('process-project', 'ProjectController@processProject');
    Route::get('get-project', 'ProjectController@getProject');
});