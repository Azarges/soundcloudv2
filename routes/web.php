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

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'MonControlleur@index');
Route::get('/musiques', 'MonControlleur@musiques');
Route::get('/musique/{id}', 'MonControlleur@musique')->where('id', '[0-9]+');
Route::get('/user/{id}', 'MonControlleur@user');

Auth::routes();


