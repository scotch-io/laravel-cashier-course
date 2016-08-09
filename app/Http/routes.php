<?php

// site routes
Route::get('/', 'SiteController@showHome');

// authentication routes
Route::auth();

// subscription routes

// account routes

// single post route
Route::get('{slug}', 'SiteController@showPost');