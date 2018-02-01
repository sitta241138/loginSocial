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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/facebook', 'SocialAuthFacebookController@redirect');
Route::get('/auth/facebook/callback', 'SocialAuthFacebookController@callback');

Route::get("/auth/twitter","SocialAuthTwitterController@redirect");
Route::get("/auth/twitter/callback", "SocialAuthTwitterController@callback");

Route::get("/auth/google","SocialAuthGoogleController@redirect");
Route::get("/auth/google/callback", "SocialAuthGoogleController@callback");

Route::get("/auth/line","SocialAuthLineController@redirect");
Route::get("/auth/line/callback", "SocialAuthLineController@callback");

