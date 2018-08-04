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

Route::get('/',['as'=> 'getIndex','uses'=>'MovieController@getIndex']);
Route::get('/movie/topRated',['as'=> 'getAllTopRated','uses'=>'MovieController@getAllTopRated']);
Route::get('/detail/{movieid}',['as'=> 'detailMovie','uses'=>'MovieController@detailMovie']);
Route::get('/loadmore/{tipe}',['as'=> 'loadMore','uses'=>'MovieController@loadMore']);
