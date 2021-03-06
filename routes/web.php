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

Route::get('', 'pagesController@home');
Route::get('home', 'pagesController@home');
Route::get('checkhome', 'pagesController@checkhome');
Route::get('login', 'pagesController@login');
Route::get('logout', 'pagesController@logout');
Route::resource('clients', 'clientsController');
Route::resource('projects', 'projectsController');
Route::resource('offers', 'offersController');
Route::get('projects/create/{client_id}','projectsController@createProject');
Route::get('offers/create/{client_id}','offersController@createOffer');

Route::put('offers/{id}', 'offersController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');