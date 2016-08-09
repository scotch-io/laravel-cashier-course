<?php

// site routes
Route::get('/', 'SiteController@showHome');

// authentication routes
Route::auth();

// subscription routes
Route::get('subscribe', 'SubscribeController@showSubscribe');
Route::post('subscribe', 'SubscribeController@processSubscribe');

// account routes

// single post route
Route::get('{slug}', 'SiteController@showPost');