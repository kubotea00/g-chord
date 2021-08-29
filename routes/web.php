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
Auth::routes();
Route::get('login/google', 'Auth\LoginController@getGoogleAuth');
Route::get('login/google/callback', 'Auth\LoginController@authGoogleCallback');
Route::get('/', 'MypageController@index') -> middleware('auth');
Route::get('/artists', 'ArtistController@index');
Route::get('/artists/search', 'ArtistController@search');
Route::get('/artists/{artist_id}/{song_title_id}', 'LyricController@show');
Route::get('/artists/{artist}', 'SongTitleController@index');
Route::post('/artists/{artist_id}/{song_title_id}', 'PostController@store');
Route::delete('/artists/{artist_id}/{song_title_id}/{post_id}', 'PostController@destroy');
