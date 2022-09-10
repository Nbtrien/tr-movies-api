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

Route::get('movies', 'Api\MovieController@getList');
Route::get('movie/{id}', 'Api\MovieController@show');
Route::get('movies/similarmovies/{id}', 'Api\MovieController@similarMovies');
Route::get('movies/sameseries/{id}', 'Api\MovieController@sameSeries');
Route::get('movies/search/{key}', 'Api\MovieController@getMoviesbyName');
Route::get('movies/actor/{id}', 'Api\MovieController@getMoviesbyActor');


Route::get('trailer/{id}', 'Api\TrailerController@getTrailerbyMovieId');
Route::get('video/{id}', 'Api\VideoController@getVideobyId');
Route::get('video/movie/{id}', 'Api\VideoController@getVideobyMovieId');
Route::get('video/movie/{id}/{episode}', 'Api\VideoController@getVideoIdbyEpisode');

Route::get('comments/{id}', 'Api\CommentController@commentsbyMovieId');

Route::get('episodes/{id}', 'Api\EpisodeController@getEpisodesbyMovie');

Route::get('actor/{id}', 'Api\ActorController@getActorbyId');



Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');
Route::post('checkemail', 'Api\AuthController@checkEmail');

