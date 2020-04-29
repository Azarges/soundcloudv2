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

Route::get('/', 'MonControlleur@index');
Route::get('/musiques', 'MonControlleur@musiques');
Route::get('/musique/{id}', 'MonControlleur@musique')->where('id', '[0-9]+');
Route::get('/user/{id}', 'MonControlleur@user');

Route::get('/nouvelle', 'MonControlleur@nouvelle')->middleware('auth');
Route::post('/creer', 'MonControlleur@creer')->middleware('auth');

Route::get('/nouvellePlaylist', 'MonControlleur@nouvellePlaylist')->middleware('auth');
Route::post('/creerPlaylist', 'MonControlleur@creerPlaylist')->middleware('auth');

Route::get('/playlist/{id}', 'MonControlleur@playlist')->where('id', '[0-9]+')->name('playlist');
Route::get('/suivi/{id}','MonControlleur@suivi')->middleware('auth')->where('id','[0-9]+');

Route::get('/ajouterChansonP/{id}', 'MonControlleur@ajouterChansonP')->middleware('auth')->where('id', '[0-9]+');
Route::post('/ajouterChanson/', 'MonControlleur@ajouterChanson')->middleware('auth');

Route::get('/recherche/{s}','MonControlleur@recherche');

Auth::routes();


