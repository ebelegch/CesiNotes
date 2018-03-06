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
Route::get('eleves', 'EleveController@index');
Route::get('eleves/{eleve}', 'EleveController@show');
Route::post('eleves', 'EleveController@store');
Route::put('eleves/{eleve}', 'EleveController@update');
Route::delete('eleves/{eleve}', 'EleveController@delete');
Route::get('/', function () {
    return view('welcome');
});
