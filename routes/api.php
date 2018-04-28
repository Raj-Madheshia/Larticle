<?php

use Illuminate\Http\Request;
Use App\Article;
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


//return list of records 
Route::get('articles', 'ArticleController@index');

//return Article by id
Route::get('articles/{article}', 'ArticleController@show');

//Create Atricle
Route::post('articles', 'ArticleController@store');

//Update Article
Route::put('articles/{article}', 'ArticleController@update');

//delete article
Route::delete('articles/{article}', 'ArticleController@delete');