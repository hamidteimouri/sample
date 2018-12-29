<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth.admin'], function () {

    Route::get('/', ['as' => 'front.url.method', 'uses' => 'HomeController@index']);

});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin\Auth'], function () {

    Route::get('/login', ['as' => 'admin.auth.login_form', 'uses' => 'LoginController@showLoginForm']);
    Route::post('/login', ['as' => 'admin.auth.login', 'uses' => 'LoginController@login']);

});