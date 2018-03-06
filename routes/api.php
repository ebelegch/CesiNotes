<?php

use Illuminate\Http\Request;
use App\Eleve;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('eleves', 'EleveController@index');
Route::get('eleves/{eleve}', 'EleveController@show');
Route::post('eleves', 'EleveController@store');
Route::put('eleves/{eleve}', 'EleveController@update');
Route::delete('eleves/{eleve}', 'EleveController@delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
