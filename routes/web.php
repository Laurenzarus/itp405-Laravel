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

//Adding sign up and login functionality
Route::get('/signup', 'SignUpController@index');
Route::post('/signup', 'SignUpController@signup');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');


//middleware here
Route::middleware(['authenticated'])->group(function() {
    //put in here any routes that need to check middleware before going through
    Route::get('/profile', 'AdminController@index');
    //move these into authenticated area after
    Route::get('/settings', 'AdminController@settings');
    Route::post('/settings', 'AdminController@changeSettings');

});//authenticated key needs configuring

Route::get('/maintenance', 'AdminController@maintenance');

//check maintenance mode
Route::middleware(['maintenance'])->group(function() {

    Route::get('/genres', 'GenresController@index');
    //Laravel 1
    // Route::get('/genres', 'GenresController@index');

    Route::get('/tracks', 'TracksController@index');
    Route::get('/invoices', 'InvoicesController@index'); //Invokes the method called 'index' in the InvoicesController
    //Laravel 2
    Route::get('/tracks/new', 'TracksController@create');
    Route::post('/tracks','TracksController@store');
    Route::get('/genres/{id}/edit', 'GenresController@show');
    Route::post('/genres', 'GenresController@edit');

    //Week 4
    Route::get('/playlists', 'PlaylistController@index');//call it index when listing whatever we're dealing with
    Route::get('/playlists/new', 'PlaylistController@create');//creating a new playlist
    Route::get('/playlists/{id}', 'PlaylistController@show');//Convention for the function name with general params

});

//Node 3: Websockets
Route::get('/docs', 'DocsController@index');