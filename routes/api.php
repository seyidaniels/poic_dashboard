<?php
Route::post('register', 'RegisterController@register');
Route::post('login', 'LoginController@login');
Route::post('recover', 'AuthController@recover');
Route::group(['middleware' => ['jwt.auth']], function() {
    Route::post('logout', 'LoginController@logout');
    Route::post('create-team', 'TeamController@createTeam');
    Route::get('get-notifications', 'NotificationsController@getNotifications');
    Route::get('get-team', 'TeamController@getTeam');
    Route::get('test', function(){
        return response()->json(['foo'=>'bar']);
    });
});
