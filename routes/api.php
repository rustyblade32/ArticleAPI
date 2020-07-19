<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


//List articles
Route::get('articles', 'ArticleController@index');

//get single article
Route::get('articles/{id}', 'ArticleController@show');

//Create new Article
Route::post('article', 'ArticleController@store');

//Update Article
Route::put('article', 'ArticleController@store');

//Delete Article
Route::delete('article/{id}', 'ArticleController@destroy');
