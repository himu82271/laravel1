<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//list Articles
Route::get('articles','Articlecontroller@index');

//list single artice
Route::get('articles/{id}','Articlecontroller@show');

//create new Article
Route::post('articles','Articlecontroller@store');

//update article
Route::put('articles','Articlecontroller@store');

//delete request
Route::delete('article/{id}','Articlecontroller@destroy');



