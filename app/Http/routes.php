<?php

// site routes
Route::get('/', 'SiteController@showHome');

// authentication routes
Route::auth();

// subscription routes
Route::get('subscribe', 'SubscribeController@showSubscribe');
Route::post('subscribe', 'SubscribeController@processSubscribe');

Route::group(['middleware' => 'auth'], function() {
    // welcome page
    Route::get('welcome', 'SubscribeController@showWelcome');

    // account routes

});

// single post route
Route::get('{slug}', 'SiteController@showPost');