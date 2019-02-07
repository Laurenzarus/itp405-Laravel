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
dd means dump and die
*/

Route::get('/', 'NavigationController@index');//invokes index method for navigation controller

Route::get('/invoices', 'InvoicesController@index'); //Invokes the method called 'index' in the InvoicesController

//Laravel 1
Route::get('/genres', 'GenresController@index');

Route::get('/tracks', 'TracksController@index');

//Laravel 2
Route::get('/tracks/new', 'TracksController@create');
Route::post('/tracks','TracksController@store');
Route::get('/genres/{id}/edit', 'GenresController@edit');

//Week 4
Route::get('/playlists', 'PlaylistController@index');//call it index when listing whatever we're dealing with
Route::get('/playlists/new', 'PlaylistController@create');//creating a new playlist
Route::get('/playlists/{id}', 'PlaylistController@show');//Convention for the function name with general params


