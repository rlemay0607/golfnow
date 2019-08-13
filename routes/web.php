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

Route::get('/round/complete/{id}',[
    'uses' => 'RoundsController@complete_round',
    'as' => 'round.complete_round'
]);

Route::get('round/edit/{id}',[
    'uses' => 'RoundsController@edit',
    'as' => 'round.edit'
]);
Route::get('round/edit_2/{id}',[
    'uses' => 'RoundsController@edit_hole_2',
    'as' => 'round.edit_hole_2'
]);
Route::get('round/edit_3/{id}',[
    'uses' => 'RoundsController@edit_hole_3',
    'as' => 'round.edit_hole_3'
]);
Route::get('round/edit_4/{id}',[
    'uses' => 'RoundsController@edit_hole_4',
    'as' => 'round.edit_hole_4'
]);
Route::get('round/edit_5/{id}',[
    'uses' => 'RoundsController@edit_hole_5',
    'as' => 'round.edit_hole_5'
]);
Route::get('round/edit_6/{id}',[
    'uses' => 'RoundsController@edit_hole_6',
    'as' => 'round.edit_hole_6'
]);
Route::get('round/edit_7/{id}',[
    'uses' => 'RoundsController@edit_hole_7',
    'as' => 'round.edit_hole_7'
]);
Route::get('round/edit_8/{id}',[
    'uses' => 'RoundsController@edit_hole_8',
    'as' => 'round.edit_hole_8'
]);
Route::get('round/edit_9/{id}',[
    'uses' => 'RoundsController@edit_hole_9',
    'as' => 'round.edit_hole_9'
]);
Route::get('round/edit_10/{id}',[
    'uses' => 'RoundsController@edit_hole_10',
    'as' => 'round.edit_hole_10'
]);
Route::get('round/edit_11/{id}',[
    'uses' => 'RoundsController@edit_hole_11',
    'as' => 'round.edit_hole_11'
]);
Route::get('round/edit_12/{id}',[
    'uses' => 'RoundsController@edit_hole_12',
    'as' => 'round.edit_hole_12'
]);
Route::get('round/edit_13/{id}',[
    'uses' => 'RoundsController@edit_hole_13',
    'as' => 'round.edit_hole_13'
]);
Route::get('round/edit_14/{id}',[
    'uses' => 'RoundsController@edit_hole_14',
    'as' => 'round.edit_hole_14'
]);
Route::get('round/edit_15/{id}',[
    'uses' => 'RoundsController@edit_hole_15',
    'as' => 'round.edit_hole_15'
]);
Route::get('round/edit_16/{id}',[
    'uses' => 'RoundsController@edit_hole_16',
    'as' => 'round.edit_hole_16'
]);
Route::get('round/edit_17/{id}',[
    'uses' => 'RoundsController@edit_hole_17',
    'as' => 'round.edit_hole_17'
]);
Route::get('round/edit_18/{id}',[
    'uses' => 'RoundsController@edit_hole_18',
    'as' => 'round.edit_hole_18'
]);
Route::post('/round/score',[
    'uses' => 'RoundsController@score_hole_1',
    'as' => 'round.score_hole_1'
]);
Route::get('/round/details/{id}/{round}',[
    'uses' => 'RoundsController@details',
    'as' => 'round.details'
]);

Route::get('/round/edit2_5/{id}',[
    'users' => 'RoundsController@showd',
    'as' => 'round.showd'
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

Route::post('/notes/golfer_1', [
    'uses' => 'RoundsController@golfer_1_note',
    'as' => 'round.golfer_1_notes'
]);
Route::post('/notes/golfer_2', [
    'uses' => 'RoundsController@golfer_2_note',
    'as' => 'round.golfer_2_notes'
]);
Route::post('/notes/golfer_3', [
    'uses' => 'RoundsController@golfer_3_note',
    'as' => 'round.golfer_3_notes'
]);
Route::post('/notes/golfer_4', [
    'uses' => 'RoundsController@golfer_4_note',
    'as' => 'round.golfer_4_notes'
]);