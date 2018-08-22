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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rounds
Route::get('/round/create', [
    'uses' => 'RoundsController@create',
    'as' => 'round.create'
]);

Route::post('/round/store',[
    'uses' => 'RoundsController@store',
    'as' => 'round.store'
]);

Route::get('round/edit/{id}',[
    'uses' => 'RoundsController@edit',
    'as' => 'round.edit'
]);

Route::post('/round/score',[
    'uses' => 'RoundsController@score',
    'as' => 'round.score'
]);
Route::get('/round/details/{id}/{round}',[
    'uses' => 'RoundsController@details',
    'as' => 'round.details'
]);

//Tees

Route::get('/tee/create', [
    'uses' => 'TeeController@create',
    'as' => 'tee.create'
]);

Route::post('/tee/store',[
    'uses' => 'TeeController@store',
    'as' => 'tee.store'
]);